
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบทดสอบ</title>

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

    <!-- แบบทดสอบฝั่งซ้าย -->
  
    <div class="child2"><h1></h1>
        <div class="childheader">
        <div class="d-flex justify-content-start ">
        <ul>
            <a href="https://forms.gle/VZVS8nkoyfqc7ywc7" class="btn btn-outline-primary " role="button">แบบทดสอบก่อนเรียนหน่วยการเรียนรู้ที่1</a><br><br>
            <a href="https://forms.gle/FmJLNSZX1Tjcqp798" class="btn btn-outline-primary" role="button">แบบทดสอบก่อนเรียนหน่วยการเรียนรู้ที่2</a><br><br>
            <a href="https://forms.gle/b3oxoiVgB4AmwCTn7" class="btn btn-outline-primary" role="button">แบบทดสอบก่อนเรียนหน่วยการเรียนรู้ที่3</a><br><br>  
            <a href="https://forms.gle/zr6g6epHFHCwEhrs6" class="btn btn-outline-primary" role="button">แบบทดสอบก่อนเรียนหน่วยการเรียนรู้ที่4</a><br><br>
            <a href="https://forms.gle/fWft5NyvtvkuAPVw7" class="btn btn-outline-primary" role="button">แบบทดสอบก่อนเรียนหน่วยการเรียนรู้ที่5</a><br><br>
            <a href="https://forms.gle/juUQeyQWgVmYoo9j9" class="btn btn-outline-primary" role="button">แบบทดสอบก่อนเรียนหน่วยการเรียนรู้ที่6</a><br><br>  
            <a href="https://forms.gle/1Ywk3FruaUoApHs28" class="btn btn-outline-primary" role="button">แบบทดสอบก่อนเรียนหน่วยการเรียนรู้ที่7</a><br><br>
            <a href="https://forms.gle/pj6rS7faqfudTSkq6" class="btn btn-outline-primary" role="button">แบบทดสอบก่อนเรียนหน่วยการเรียนรู้ที่8</a><br><br>
        </ul>
        <ul>
            <a href="https://forms.gle/KjiV4UrjotKHBjre7" class="btn btn-outline-success" role="button">แบบทดสอบหลังเรียนหน่วยการเรียนรู้ที่1</a><br><br>
            <a href="https://forms.gle/qHZwihw1stvdkWm48" class="btn btn-outline-success" role="button">แบบทดสอบหลังเรียนหน่วยการเรียนรู้ที่2</a><br><br>
            <a href="https://forms.gle/nH5y6PhVYuieqTqh9" class="btn btn-outline-success" role="button">แบบทดสอบหลังเรียนหน่วยการเรียนรู้ที่3</a><br><br> 
            <a href="https://forms.gle/Uh35vfPi8sJxGBci8" class="btn btn-outline-success" role="button">แบบทดสอบหลังเรียนหน่วยการเรียนรู้ที่4</a><br><br>
            <a href="https://forms.gle/Jqe1eyzd9wRrBEHL7" class="btn btn-outline-success" role="button">แบบทดสอบหลังเรียนหน่วยการเรียนรู้ที่5</a><br><br>
            <a href="https://forms.gle/3dCLoq6Rpg2eu9mN8" class="btn btn-outline-success" role="button">แบบทดสอบหลังเรียนหน่วยการเรียนรู้ที่6</a><br><br>  
            <a href="https://forms.gle/AaEruj4qfnRpEDqG8" class="btn btn-outline-success" role="button">แบบทดสอบหลังเรียนหน่วยการเรียนรู้ที่7</a><br><br>
            <a href="https://forms.gle/8hFAurH4cmeq3YS29" class="btn btn-outline-success" role="button">แบบทดสอบหลังเรียนหน่วยการเรียนรู้ที่8</a><br><br>
        </ul>
        </div>
        </div>
        </div>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
