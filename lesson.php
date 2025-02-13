<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บทเรียน</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style12.css">
    <link rel="stylesheet" href="FontAwesome6.2.0/css/all.min.css">
</head>
<body>
     <!--  notification message -->
     <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">หน้าแรก</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="lesson.php">บทเรียน</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Quiz.php">แบบทดสอบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Contact_us.php">ติดต่อเรา</a>
        </li>
      </ul>
      <div class="d-flex">
      <a href="index.php?logout='1'"class="btn btn-outline-light" style="color: red;">ออกจากระบบ</a>
    </div>
  </div>
</nav>

<div class="container mt-4">
    <div class="row row-cols-1 g-3">
        <div class="col">
            <a href="Chapter_1.php" class="btn btn-outline-dark w-100">บทที่ 1 พลังงานและประเภทของพลังงาน</a>
        </div>
        <div class="col">
            <a href="Chapter_2.php" class="btn btn-outline-dark w-100">บทที่ 2 ทรัพยากรธรรมชาติและสิ่งแวดล้อม</a>
        </div>
        <div class="col">
            <a href="Chapter_3.php" class="btn btn-outline-dark w-100">บทที่ 3 ความสัมพันธ์ของพลังงาน ทรัพยากรธรรมชาติและสิ่งแวดล้อม</a>
        </div>
        <div class="col">
            <a href="Chapter_4.php" class="btn btn-outline-dark w-100">บทที่ 4 พลังงานกับการดำรงชีวิต</a>
        </div>
        <div class="col">
            <a href="Chapter_5.php" class="btn btn-outline-dark w-100">บทที่ 5 ผลกระทบจากการผลิตและการใช้พลังงาน</a>
        </div>
        <div class="col">
            <a href="Chapter_6.php" class="btn btn-outline-dark w-100">บทที่ 6 ปัญหาจากการใช้พลังงาน : สภาวะโลกร้อน</a>
        </div>
        <div class="col">
            <a href="Chapter_7.php" class="btn btn-outline-dark w-100">บทที่ 7 สถานการณ์ปัญหาพลังงาน</a>
        </div>
        <div class="col">
            <a href="Chapter_8.php" class="btn btn-outline-dark w-100">บทที่ 8 พลังงานทดแทน</a>
        </div>
        <div class="col">
            <a href="Chapter_9.php" class="btn btn-outline-dark w-100">บทที่ 9 นโยบายพลังงาน</a>
        </div>
        <div class="col">
            <a href="Chapter_10.php" class="btn btn-outline-dark w-100">บทที่ 10 กฎหมายการอนุรักษ์พลังาน</a>
        </div>
        <div class="col">
            <a href="Chapter_11.php" class="btn btn-outline-dark w-100">บทที่ 11 หลักการและวิธีการอนุรักษ์พลังงาน</a>
        </div>
        <div class="col">
            <a href="Chapter_12.php" class="btn btn-outline-dark w-100">บทที่ 12 การจัดการทรัพยากรธรรมชาติและสิ่งแวดล้อม</a>
        </div>
    </div>
</div>

    </header>
    <script src="jQuery/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('.toggle').click(function(){
                $('.toggle').toggleClass('active');
                $('ul').toggleClass('active');
            })
        })
    </script>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>