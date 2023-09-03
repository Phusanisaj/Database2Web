<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson1</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container p-5 my-5 bg-dark text-white">
        <h1>Database to Web with PHP : Lesson1</h1>
        <p>6401102053104 Miss Phusanisa Jamrat</p>
    </div>
    <?php
    require "Connect.PHP";
    $query = "SELECT * FROM tb_section order by SECT_ID DESC";
    $statement = $pdo->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container mt-3">
        <h2>Section Data</h2>
        <p>แสดงข้อมูลทั้งหมดโดยเรียงจาก SECT_ID จากมากไปหาน้อย</p>
        <div class="btn-group btn-group-lg">
            <button type="button" class="btn btn-info" onclick="window.location.href ='index.php'">กลับไปยังหน้าหลัก
            </button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href ='Lesson2.php'">Lesson 2 : แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME โดยเรียงจาก SECT_NAME จาก A-Z
            </button>
            <button type="button" class="btn btn-info">Lesson 3 : แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A
            </button>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>SECT_ID</th>
                    <th>SECT_NAME</th>
                    <th>SECT_BUILDING_NAME</th>
                    <th>SECT_TELEPHONE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row) : ?>
                    <tr>
                        <td><?php echo $row['SECT_ID']; ?></td>
                        <td><?php echo $row['SECT_NAME']; ?></td>
                        <td><?php echo $row['SECT_BUILDING_NAME']; ?></td>
                        <td><?php echo $row['SECT_TELEPHONE']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>