<?php
include('includes/auth.php');
include('config.php');

$result = null; // Başlangıçta $result değişkenini null olarak ayarlıyoruz

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $type = $_POST['type'];
    $year = $_POST['year'];

    // SQL enjeksiyon saldırılarına karşı hazırlıklı ifadeler kullanıyoruz
    $stmt = $conn->prepare("SELECT * FROM copyrights WHERE title LIKE ? AND type LIKE ? AND YEAR(release_date) = ?");
    $title_param = "%$title%";
    $type_param = "%$type%";
    $stmt->bind_param('ssi', $title_param, $type_param, $year);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            padding-top: 20px;
        }
        .form-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        .form-group {
            margin-right: 10px;
            position: relative;
        }
        .form-group label {
            position: absolute;
            top: -10px;
            left: 10px;
            background: white;
            padding: 0 5px;
            font-size: 14px;
        }
        .form-control {
            padding-top: 15px;
            box-sizing: border-box;
        }
        .search-button {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }
        .btn-margin {
            margin-right: 10px;
        }
        .btn {
            background-color: purple;
            border-color: purple;
            color: white;
        }
        .text-left {
            text-align: left;
        }
    </style>
</head>
<body>
    <?php include('includes/navbar.php'); ?>

    <div class="container text-center">
        <div class="row mb-3">
            <div class="col">
                <h2 class="mb-0">Eser Arama</h2>
            </div>
        </div>
        <div class="row mb-3">
            <form method="post" class="w-50 mx-auto">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="year">Year:</label>
                    <input type="text" name="year" id="year" list="years" class="form-control">
                    <datalist id="years">
                        <?php
                        $currentYear = date("Y");
                        for ($i = 1900; $i <= $currentYear; $i++) {
                            echo "<option value=\"$i\"></option>";
                        }
                        ?>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <select name="type" id="type" class="form-control">
                        <option value="">Select Type</option>
                        <option value="Book">Book</option>
                        <option value="Music">Music</option>
                        <option value="Film">Film</option>
                    </select>
                </div>
                <div class="search-button">
                    <button type="submit" class="btn btn-block">Search</button>
                </div>
            </form>
        </div>

        <?php if ($result && $result->num_rows > 0): ?>
            <div class="row search-result">
                <div class="col-md-12">
                    <h4 class="text-left">Search Results</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Owner</th>
                                <th>Type</th>
                                <th>License Status</th>
                                <th>Description</th>
                                <th>Release Date</th>
                                <th>Copyright</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                                    <td><?php echo htmlspecialchars($row['owner']); ?></td>
                                    <td><?php echo htmlspecialchars($row['type']); ?></td>
                                    <td><?php echo htmlspecialchars($row['license_status']); ?></td>
                                    <td><?php echo htmlspecialchars($row['description']); ?></td>
                                    <td><?php echo htmlspecialchars($row['release_date']); ?></td>
                                    <td><?php echo htmlspecialchars($row['copyright']); ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <div class="row search-result">
                <div class="col-md-12">
                    <h4 class="text-left">Search Results</h4>
                    <p class="text-left">No results found.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
