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
    <title>ติดต่อเรา</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style23.css">
    <link rel="stylesheet" href="FontAwesome6.2.0/css/all.min.css">
</head>
<body>
    
<div class="container0">
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="lesson.php">บทเรียน</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Quiz.php">แบบทดสอบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Contact_us.php">ติดต่อเรา</a>
        </li>
      </ul>
      <a href="index.php?logout='1'" class="btn btn-outline-light text-danger">ออกจากระบบ</a>
    </div>
  </div>
</nav>

<div class="container4"><a href="https://www.sptc.ac.th/home/">
        <div class="childDM"><img src="pictures/t1.png" alt="" class="img-fluid"></div>
     </a>    
    </div>

<div class="container text-center mt-4">
    <h1>ทีมผู้พัฒนา</h1>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <a href="https://web.facebook.com/nattapon.new.2024" target="_blank" class="text-decoration-none">
                <div class="card p-3 shadow">
                    <p><strong>นาย ณัฐพล อ่ำกร่าง</strong></p>
                    <p>แผนกวิชาคอมพิวเตอร์ธุรกิจ 3/2</p>
                    <p>วิทยาลัยเทคนิคสมุทรปราการ</p>
                    <p class="text-success">กดเพื่อไปยังโปรไฟล์</p>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-12">
            <a href="https://web.facebook.com/KingLolicon.Des.583" target="_blank" class="text-decoration-none">
                <div class="card p-3 shadow">
                    <p><strong>นาย สุวรรณภูมิ จริตธรรม</strong></p>
                    <p>แผนกวิชาคอมพิวเตอร์ธุรกิจ 3/2</p>
                    <p>วิทยาลัยเทคนิคสมุทรปราการ</p>
                    <p class="text-success">กดเพื่อไปยังโปรไฟล์</p>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-12">
            <a href="https://web.facebook.com/profile.php?id=100026769826180" target="_blank" class="text-decoration-none">
                <div class="card p-3 shadow">
                    <p><strong>นาย ภพธร หารประทุม</strong></p>
                    <p>แผนกวิชาคอมพิวเตอร์ธุรกิจ 3/2</p>
                    <p>วิทยาลัยเทคนิคสมุทรปราการ</p>
                    <p class="text-success">กดเพื่อไปยังโปรไฟล์</p>
                </div>
            </a>
        </div>
    </div>
</div>
    <script src="jQuery/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('.toggle').click(function(){
                $('.toggle').toggleClass('active');
                $('ul').toggleClass('active');
            })
        })
    </script>
    </div>
</body>
</html>
<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>