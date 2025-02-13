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
    <title>กฎหมายการอนุรักษ์พลังาน</title>

    <link rel="stylesheet" href="style31.css">
    <link rel="stylesheet" href="FontAwesome6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <header>
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

    <div class="container19">
        <div class="child"><h1>กฎหมายการอนุรักษ์พลังาน</h1></div> <!-- หัวข้อชื่อบท -->
        </div>
        <!-- ส่วนใส่เนื้อหาหรือลิงค์ -->
        <div class="container4">
            <h5>ความเป็นมา</h5>
            <p>กรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงาน (พพ.) ได้ตอบสนองนโยบายของรัฐบาลในการสงวนรักษาพลังงานของชาติโดยรับหน้าที่ควบคุมดูแลและกำกับการผลิต และการใช้พลังงาน ตลอดจนส่งเสริมให้คนไทยใช้พลังงานอย่างประหยัดและมีประสิทธิภาพ เพื่อช่วยลดค่าใช้จ่ายจากการใช้พลังงานอย่างสิ้นเปลือง ลดการลงทุนในการจัดหาแหล่งพลังงานใหม่ และลดการเสียดุลการค้าระหว่างประเทศ รวมทั้งป้องกันผลกระทบต่อสภาวะแวดล้อมที่อาจเกิดขึ้นจากการผลิตและการใช้พลังงาน และเพื่อเป็นการส่งเสริมการอนุรักษ์พลังงานแก่ภาคเอกชน กรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงานจึงได้ยกร่างกฎหมายส่งเสริมการอนุรักษ์พลังงานขึ้นในปี พ.ศ. 2535</p>
            <br>
            <h5>กฎหมายอนุรักษ์พลังงาน</h5>
            <p>กฎหมายอนุรักษ์พลังงานมีชื่อเต็มว่า “พระราชบัญญัติการส่งเสริมการอนุรักษ์พลังงาน พ.ศ. 2535” มีผลให้ใช้บังคับในวันถัดจากวันประกาศในราชกิจจานุเบกษาเป็นต้นไป คือวันที่ 3 เมษายน พ.ศ. 2535 หลักการของกฎหมายมีวัตถุประสงค์เพื่อ</p>
            <br>
            <p>1. กำกับ ดูแล ส่งเสริม และสนับสนุนให้ผู้ที่อยู่ภายใต้บังคับของกฎหมาย (อาคารควบคุม และโรงงานควบคุม) มีการอนุรักษ์พลังงานด้วยการผลิตและการใช้พลังงานอย่างมีประสิทธิภาพและประหยัด</p>
            <p>2. ส่งเสริมและสนับสนุนให้เกิดการผลิตเครื่องจักร อุปกรณ์ที่มีประสิทธิภาพ และวัสดุที่ใช้ในการอนุรักษ์พลังงานขึ้นภายในประเทศ และมีการใช้อย่างแพร่หลาย</p>
            <p>3. ส่งเสริมและสนับสนุนให้การอนุรักษ์พลังงานเป็นรูปธรรมด้วยการจัดตั้ง “กองทุนเพื่อส่งเสริมการอนุรักษ์พลังงาน” เพื่อใช้เป็นกลไกในการให้การอุดหนุนช่วยเหลือทางการเงินในการอนุรักษ์พลังงาน กฎหมายอนุรักษ์พลังงานประกอบด้วย 9 หมวด 61 มาตรา</p>
            <br>
            <p>กลุ่มเป้าหมายหลักของกฎหมายตามหมวด 1 หมวด 2 และหมวด 3 สามารถจัดแบ่งกลุ่มเป้าหมายที่รัฐจะเข้าไปกำกับดูแลและให้การส่งเสริมช่วยเหลือได้ คือ</p>
            <br>
            <p>1. โรงงานควบคุม</p>
            <p>2. อาคารควบคุม</p>
            <p>3. ผู้ผลิตหรือผู้จำหน่ายเครื่องจักรอุปกรณ์ที่มีประสิทธิภาพสูง และวัสดุที่ใช้ในการอนุรักษ์พลังงาน</p>
            <br>
            <p>สำหรับกลุ่มโรงงานควบคุมและอาคารควบคุมจะเน้นไปที่โรงงานและอาคารที่ใช้พลังงานในปริมาณมากและมีศักยภาพพร้อมที่จะดำเนินการอนุรักษ์พลังงานได้ทันที โดยจะมีการออก “พระราชกฤษฎีกากำหนดโรงงานควบคุม” และ “พระราชกฤษฎีกากำหนดอาคารควบคุม” เพื่อกำหนดว่าโรงงานและอาคารประเภทใดใช้พลังงานชนิดใดในปริมาณเท่าใดจึงจะเป็นโรงงานควบคุมและอาคารควบคุมที่จะต้องดำเนินการอนุรักษ์พลังงานตามพระราชบัญญัตินี้</p>
            <br>
            <p>ในส่วนของกลุ่มผู้ผลิตหรือผู้จำหน่ายเครื่องจักรอุปกรณ์ที่มีประสิทธิภาพสูงและวัสดุที่ใช้ในการอนุรักษ์พลังงานจะได้รับสิทธิในการอุดหนุนช่วยเหลือเพื่อให้มีการผลิตหรือจำหน่ายเครื่องจักรอุปกรณ์และวัสดุเหล่านี้แก่ประชาชนทั่วไปอย่างแพร่หลายและมีราคาถูก ซึ่งจะช่วยให้ประชาชนทั่วไปลดการใช้พลังงานลงได้ ทั้งนี้จะได้มีการกำหนดประเภทและมาตรฐานของคุณภาพของเครื่องจักร อุปกรณ์ และวัสดุที่จะได้รับสิทธิอุดหนุนช่วยเหลือไว้ในกฎกระทรวงต่อไป</p>
            <br>
            <p>กิจกรรมที่ถือว่าเป็นการอนุรักษ์พลังงานในโรงงานตามมาตรา 7 ได้แก่ การดำเนินการอย่างใดอย่างหนึ่งดังต่อไปนี้</p>
            <br>
            <p>1. การปรับปรุงประสิทธิภาพการเผาไหม้เชื้อเพลิง</p>
            <p>2. การป้องกันการสูญเสียพลังงาน</p>
            <p>3. การนำพลังงานที่เหลือจากการใช้แล้วกลับมาใช้ใหม่</p>
            <p>4. การเปลี่ยนไปใช้พลังงานอีกประเภทหนึ่ง</p>
            <p>5. การปรับปรุงการใช้ไฟฟ้าด้วยวิธีปรับปรุงตัวประกอบกำลังไฟฟ้า การลดความต้องการพลังไฟฟ้าสูงสุดในช่วงความต้องการใช้ไฟฟ้าสูงสุดของระบบการใช้อุปกรณ์ไฟฟ้าให้เหมาะสมกับภาระและวิธีการอื่น</p>
            <p>6. การใช้เครื่องจักรหรืออุปกรณ์ที่มีประสิทธิภาพสูง ตลอดจนระบบควบคุมการทำงานและวัสดุที่ช่วยในการอนุรักษ์พลังงาน</p>
            <p>7. การอนุรักษ์พลังงานโดยวิธีอื่นตามที่กำหนดในกฎกระทรวง</p>
            <br>
            <p>กิจกรรมการอนุรักษ์พลังงานในอาคารตามมาตรา 17 ได้แก่ การดำเนินการอย่างใดอย่างหนึ่ง ดังต่อไปนี้</p>
            <br>
            <p>1. การลดความร้อนจากแสงอาทิตย์ที่เข้ามาในอาคาร</p>
            <p>2. การปรับอากาศอย่างมีประสิทธิภาพ รวมทั้งการรักษาอุณหภูมิภายในอาคารให้อยู่ในระดับที่เหมาะสม</p>
            <p>3. การใช้วัสดุก่อสร้างอาคารที่จะช่วยอนุรักษ์พลังงาน ตลอดจนการแสดงคุณภาพของวัสดุก่อสร้างนั้นๆ</p>
            <p>4. การใช้แสงสว่างในอาคารอย่างมีประสิทธิภาพ</p>
            <p>5. การใช้ และการติดตั้งเครื่องจักรอุปกรณ์ และวัสดุที่ก่อให้เกิดการอนุรักษ์พลังงานในอาคาร</p>
            <p>6. การใช้ระบบควบคุมการทำงานของเครื่องจักร และอุปกรณ์</p>
            <p>7. การอนุรักษ์พลังงานโดยวิธีอื่นตามที่กำหนดในกฎกระทรวง</p>
            <br>
            <p>การกำหนดประเภทกิจกรรมที่ถือว่าเป็นการอนุรักษ์พลังงานในโรงงานและอาคารดังกล่าวข้างต้น เพื่อให้ผู้ที่มีหน้าที่เกี่ยวข้องทั้งในส่วนผู้ปฏิบัติและผู้กำกับดูแลมีความเข้าใจชัดเจนตรงกันว่าการดำเนินการอย่างใดที่ถือว่าเป็นการอนุรักษ์พลังงานตามกฎหมายนี้</p>
            <br>
            <h5>ข้อกำหนดอาคารควบคุม</h5>
            <p>พระราชกฤษฎีกากำหนดอาคารควบคุม พ.ศ. 2538 ซึ่งมีผลบังคับใช้ตั้งแต่วันที่ 12 ธันวาคม พ.ศ. 2538 ได้กำหนดให้อาคารที่มีลักษณะเป็นอาคารหลังเดียวหรือหลายหลังภายใต้เลขที่บ้านเดียวกันที่มีการใช้พลังงานดังต่อไปนี้เป็น "อาคารควบคุม":</p>
            <br>
            <p>1. ได้รับอนุมัติจากผู้จำหน่ายให้ใช้เครื่องวัดไฟฟ้าหรือให้ติดตั้งหม้อแปลงไฟฟ้าชุดเดียวหรือหลายชุดรวมกันมีขนาดตั้งแต่ 1,000 กิโลวัตต์ หรือ 1,175 กิโลโวลต์แอมแปร์ขึ้นไป</p>
            <p>2. มีการใช้ไฟฟ้าจากระบบของผู้จำหน่ายความร้อนจากไอน้ำจากผู้จำหน่ายหรือพลังงานสิ้นเปลืองอื่นจากผู้จำหน่ายหรือของตนเองอย่างใดอย่างหนึ่งหรือรวมกันตั้งแต่วันที่ 1 มกราคม ถึงวันที่ 31 ธันวาคมของปีที่ผ่านมา มีปริมาณพลังงานทั้งหมดเทียบเท่าพลังงานไฟฟ้าตั้งแต่ 20 ล้านเมกะจูลขึ้นไป</p>
            <p>พลังงานสิ้นเปลืองตามกฎหมายอนุรักษ์พลังงาน หมายความรวมถึงพลังงานที่ได้จากถ่านหิน หิน น้ำมัน ทรายน้ำมัน น้ำมันดิบ น้ำมันเชื้อเพลิง ก๊าซธรรมชาติ และนิวเคลียร์ เป็นต้น</p>
            <br>
            <p>อาคารที่ได้รับการยกเว้นไม่เป็นอาคารควบคุม ได้แก่ อาคารที่ใช้เป็นพระที่นั่งหรือพระราชวัง อาคารที่ทำการสถานทูตหรือสถานกงสุลต่างประเทศ อาคารที่ทำการขององค์การระหว่างประเทศ หรือที่ทำการของหน่วยงานที่ตั้งขึ้นตามความตกลงระหว่างรัฐบาลไทยกับรัฐบาลต่างประเทศ โบราณสถาน วัดวาอารามหรืออาคารต่างๆ ที่ใช้เพื่อการศาสนาซึ่งมีกฎหมายควบคุมการก่อสร้างไว้แล้วโดยเฉพาะ พระราชกฤษฎีกากำหนดอาคารควบคุม พ.ศ. 2538</p>
            <b>ลักษณะของโรงงานควบคุมและอาคารควบคุม</b>
            <br>
            <p>ผู้ที่มีหน้าที่ต้องดำเนินการอนุรักษ์พลังงานตามพระราชบัญญัติการส่งเสริมการอนุรักษ์พลังงาน พ.ศ. 2535 (ฉบับแก้ไขเพิ่มเติม) นั้นจะถูกเรียกว่า “โรงงานควบคุม” หรือ “อาคารควบคุม” แล้วแต่กรณี โดยจะเน้นไปที่โรงงานและอาคารที่มีการใช้พลังงานในปริมาณมากและมีศักยภาพพร้อมที่จะดำเนินการอนุรักษ์พลังงานได้ทันที ทั้งนี้ลักษณะของโรงงานควบคุมหรืออาคารควบคุมย่อมเป็นไปตามที่พระราชกฤษฎีกากำหนดโรงงานควบคุม พ.ศ. 2540 และพระราชกฤษฎีกากำหนดอาคารควบคุม พ.ศ. 2538 ได้กำหนดไว้ดังนี้</p>
            <br>
            <p>โรงงานควบคุมหรืออาคารควบคุม หมายถึงโรงงานหรืออาคารที่มีหน้าที่ต้องดำเนินการอนุรักษ์พลังงานตามพระราชบัญญัติการส่งเสริมการอนุรักษ์พลังงาน พ.ศ. 2535 (ฉบับแก้ไขเพิ่มเติม) ซึ่งโรงงานหรืออาคารที่เข้าข่ายเป็นโรงงานควบคุมหรืออาคารควบคุมนั้นจะต้องมีลักษณะการใช้พลังงานอย่างหนึ่งอย่างใดดังต่อไปนี้</p>
            <br>
            <p>(1) เป็นโรงงานหรืออาคารที่ได้รับอนุมัติจากผู้จำหน่ายพลังงานให้ใช้เครื่องวัดไฟฟ้าหรือให้ติดตั้งหม้อแปลงไฟฟ้าชุดเดียวหรือหลายชุดรวมกันมีขนาดตั้งแต่ 1,000 กิโลวัตต์หรือ 1,175 กิโลโวลต์แอมแปร์ขึ้นไป หรือ</p>
            <br>
            <p>(2) เป็นโรงงานหรืออาคารที่ใช้ไฟฟ้าจากระบบของผู้จำหน่ายพลังงาน ความร้อนจากไอน้ำจากผู้จำหน่ายพลังงานหรือพลังงานสิ้นเปลืองอื่นจากผู้จำหน่ายพลังงานหรือของตนเองอย่างใดอย่างหนึ่งหรือรวมกันตั้งแต่วันที่ 1 มกราคมถึงวันที่ 31 ธันวาคมของปีที่ผ่านมา มีปริมาณพลังงานทั้งหมดเทียบเท่าพลังงานไฟฟ้าตั้งแต่ 20 ล้านเมกะจูลขึ้นไป</p>
            <br>
            <p>อย่างไรก็ดี สำหรับอาคารบางประเภทแม้มีลักษณะการใช้พลังงานเข้าข่ายเป็นอาคารควบคุมตามที่กล่าวมาข้างต้น แต่พระราชกฤษฎีกากำหนดอาคารควบคุม พ.ศ. 2538 ก็ได้กำหนดยกเว้นไว้ไม่ให้อาคารดังต่อไปนี้เป็นอาคารควบคุม ซึ่งได้แก่ อาคารที่ใช้เป็นพระที่นั่งหรือพระราชวัง อาคารที่ทำการสถานทูตหรือสถานกงสุลต่างประเทศ อาคารที่ทำการขององค์การระหว่างประเทศหรือที่ทำการของหน่วยงานที่ตั้งขึ้นตามความตกลงระหว่างรัฐบาลไทยกับรัฐบาลต่างประเทศ โบราณสถาน วัดวาอารามหรืออาคารต่างๆ ที่ใช้เพื่อการศาสนาซึ่งมีกฎหมายควบคุมการก่อสร้างไว้แล้วโดยเฉพาะ</p>
            <br>
            <h5>หน้าที่และขั้นตอนการอนุรักษ์พลังงานของอาคารควบคุม</h5>
            <p>ตามมาตรา 9 ได้กำหนดหน้าที่ให้เจ้าของโรงงานควบคุมต้องดำเนินการไว้ชัดเจน คือ ต้องอนุรักษ์พลังงาน ตรวจสอบ และวิเคราะห์การใช้พลังงานในโรงงานของตนให้เป็นไปตามมาตรฐาน หลักเกณฑ์ และวิธีการที่กำหนดในกฎกระทรวง ประกอบมาตรา 21 ได้กำหนดหน้าที่ให้เจ้าของอาคารควบคุมต้องอนุรักษ์พลังงาน ตรวจสอบ และวิเคราะห์การใช้พลังงานในอาคารของตนให้เป็นไปตามมาตรฐาน หลักเกณฑ์ และวิธีการที่กำหนดในกฎกระทรวงที่ออกตามมาตรา 19 กฎกระทรวงมาตรฐานการอนุรักษ์พลังงานในอาคารควบคุม ซึ่งเป็นการกำหนดมาตรฐานในเรื่องของค่าการถ่ายเทความร้อนรวมของอาคาร (OTTV, RTTV) การใช้ไฟฟ้าส่องสว่างในอาคาร และมาตรฐานการปรับอากาศในอาคาร</p>
            <br>
            <p>นอกจากหน้าที่ตามมาตรา 9 และมาตรา 21 แล้ว ตามมาตรา 11 และมาตรา 22 ยังได้กำหนดให้เจ้าของโรงงานควบคุมและอาคารควบคุมต้องดำเนินการดังต่อไปนี้</p>
            <br>
            <p>1. จัดให้มีผู้รับผิดชอบด้านพลังงานอย่างน้อย 1 คน ประจำที่โรงงานควบคุมและอาคารควบคุมแต่ละแห่ง</p>
            <p>2. ส่งข้อมูลเกี่ยวกับการผลิต การใช้พลังงาน และการอนุรักษ์พลังงานให้แก่กรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงานตามแบบและระยะเวลาที่กำหนดในกฎกระทรวง</p>
            <p>3. จัดให้มีการบันทึกข้อมูลการใช้พลังงาน การติดตั้งหรือเปลี่ยนแปลงเครื่องจักรหรืออุปกรณ์ที่มีผลต่อการใช้พลังงานและการอนุรักษ์พลังงาน ทั้งนี้ตามหลักเกณฑ์และวิธีการที่กำหนดในกฎกระทรวง</p>
            <p>4. กำหนดเป้าหมายและแผนอนุรักษ์พลังงานของโรงงานควบคุมและอาคารควบคุม และส่งให้แก่กรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงานตามหลักเกณฑ์ วิธีการ และระยะเวลาที่กำหนดในกฎกระทรวง</p>
            <p>5. ตรวจสอบและวิเคราะห์การปฏิบัติตามเป้าหมายและแผนอนุรักษ์พลังงาน ทั้งนี้ตามหลักเกณฑ์ วิธีการ และระยะเวลาที่กำหนดในกฎกระทรวง</p>
            <br>
            <h5>ค่าธรรมเนียมพิเศษการใช้ไฟฟ้า</h5>
            <p>ตามมาตรา 42 ได้กำหนดให้เจ้าของโรงงานควบคุมและอาคารควบคุมต้องมีหน้าที่ชำระค่าธรรมเนียมพิเศษการใช้ไฟฟ้าในกรณีที่โรงงานควบคุมและอาคารควบคุมฝ่าฝืนหรือไม่ปฏิบัติตามกฎกระทรวงที่ออกตามมาตรา 9 หรือมาตรา 19 ว่าด้วยมาตรฐานการอนุรักษ์พลังงานในอาคารควบคุม (มีผลใช้บังคับตั้งแต่วันที่ 12 ธันวาคม พ.ศ. 2538) เมื่อพ้นกำหนด 3 ปี นับแต่วันที่กฎกระทรวงดังกล่าวใช้บังคับค่าธรรมเนียมดังกล่าวการไฟฟ้าทั้ง 3 แห่ง แล้วแต่กรณีจะเป็นหน่วยที่เรียกเก็บจากโรงงานควบคุมและอาคารควบคุมโดยตรง</p>
            <br>
            <p>ขั้นตอนในการเรียกเก็บค่าธรรมเนียมจะกระทำเมื่อมีกรณีที่ต้องดำเนินการเรียกเก็บค่าธรรมเนียมพิเศษ โดยอธิบดีกรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงานมีหนังสือแจ้งเจ้าของโรงงานควบคุมและอาคารควบคุมที่จะต้องชำระค่าธรรมเนียมทราบ และให้ภาระการชำระเริ่มมีผลตั้งแต่วันที่ 1 ของเดือนถัดไป นับแต่วันที่ได้รับแจ้งจากอธิบดี (มาตรา 44)</p>
            <br>
            <p>ในกรณีที่ถูกเรียกเก็บค่าธรรมเนียมพิเศษให้คณะกรรมการกองทุนฯ พิจารณาระงับสิทธิการขอรับการส่งเสริมและช่วยเหลือแก่โรงงานควบคุมหรืออาคารควบคุมเป็นการชั่วคราวได้ หรือให้ระงับหรือลดการให้การส่งเสริมและช่วยเหลือเป็นการชั่วคราวได้ตามเห็นสมควร (มาตรา 45)เมื่อเจ้าของโรงงานควบคุมและอาคารควบคุมได้ปฏิบัติตามกฎกระทรวงที่ออกตามมาตรา 9 และมาตรา 19 แล้วให้แจ้งอธิบดีทราบ โดยอธิบดีต้องพิจารณาภายใน 30 วัน ว่าโรงงานควบคุมและอาคารควบคุมได้ปฏิบัติตามกฎกระทรวงหรือไม่ ในกรณีที่ได้ปฏิบัติแล้วให้อธิบดีมีคำสั่งยุติการเก็บค่าธรรมเนียมพิเศษ และมีหนังสือแจ้งให้โรงงานควบคุมและอาคารควบคุมทราบ โดยมีผลการยุติเก็บค่าธรรมเนียมพิเศษตั้งแต่วันที่ 1 ของเดือนถัดไป (มาตรา 46)</p>
            <br>
            <b>บทกำหนดโทษสำหรับผู้ฝ่าฝืนกฎหมายอนุรักษ์พลังงาน</b>
            <p>หมวด 18 ได้กำหนดบทกำหนดโทษไว้ในมาตรา 53-61 ดังนี้</p>
            <br>
            <b>มาตรา 53</b>
            <p>เจ้าของโรงงานควบคุมแห่งใดแจ้งรายละเอียดหรือเหตุผลตามมาตรา 8 วรรคสาม อันเป็นเท็จ ต้องระวางโทษจำคุกไม่เกินสามเดือน หรือปรับไม่เกินหนึ่งแสนห้าหมื่นบาท หรือทั้งจำทั้งปรับ</p>
            <br>
            <b>มาตรา 54</b>
            <p>เจ้าของโรงงานควบคุมผู้ใดไม่ปฏิบัติตามคำสั่งของอธิบดีที่สั่งตามมาตรา 10 หรือเจ้าของ อาคารควบคุมผู้ใดไม่ปฏิบัติตามคำสั่งของอธิบดีที่สั่งตามมาตรา 10 ซึ่งได้นำมาใช้บังคับ โดยอนุโลมตามมาตรา 21 ต้องระวางโทษปรับไม่เกินห้าหมื่นบาท</p>
            <br>
            <b>มาตรา 55</b>
            <p>เจ้าของโรงงานควบคุมผู้ใดไม่ปฏิบัติตามมาตรา 11 (1) หรือเจ้าของอาคารควบคุมผู้ใดไม่ปฏิบัติตามมาตรา 11 (1) ซึ่งได้นำมาใช้บังคับโดยอนุโลมตามมาตรา 22 ต้องระวางโทษปรับไม่เกินสองแสนบาท</p>
            <br>
            <b>มาตรา 56</b>
            <p>เจ้าของโรงงานควบคุมผู้ใดไม่ปฏิบัติตามมาตรา 11 (2) (3) (4) หรือ (5) หรือมาตรา 15 หรือเจ้าของอาคารควบคุมผู้ใดไม่ปฏิบัติตามมาตรา 11 (2) (3) (4) หรือ (5) หรือมาตรา 15 ซึ่งได้นำมาใช้บังคับโดยอนุโลมตามมาตรา 22 ต้องระวางโทษปรับไม่เกินหนึ่งแสนบาท</p>
            <br>
            <b>มาตรา 57</b>
            <p>เจ้าของโรงงานควบคุมผู้ใดรับรองผลด้านการอนุรักษ์พลังงานตามมาตรา 13 (1) หรือ (2) อันเป็นเท็จ หรือเจ้าของอาคารควบคุมผู้ใดรับรองผลด้านการอนุรักษ์พลังงานตามมาตรา 13 (1) หรือ (2) ซึ่งได้นำมาใช้บังคับโดยอนุโลมตามมาตรา 22 อันเป็นเท็จ หรือผู้รับผิดชอบด้านพลังงานของโรงงานควบคุมผู้ใดรับรองข้อเท็จจริงตามมาตรา 14 (3) (4) หรือ (6) อันเป็นเท็จ หรือผู้รับผิดชอบด้านพลังงานของอาคารควบคุมผู้ใดรับรองข้อเท็จจริงตามมาตรา 14 (3) (4) หรือ (6) ซึ่งได้นำมาใช้บังคับโดยอนุโลมตามมาตรา 22 อันเป็นเท็จ ต้องระวางโทษจำคุกไม่เกินหนึ่งเดือน หรือปรับไม่เกินห้าหมื่นบาท หรือทั้งจำทั้งปรับ</p>
            <br>
            <b>มาตรา 58</b>
            <p>ผู้ใดไม่ส่งเงินเข้ากองทุนหรือส่งเงินเข้ากองทุนไม่ครบตามจำนวนที่ต้องส่งตามมาตรา 35 มาตรา 36 หรือมาตรา 37 ต้องระวางโทษจำคุกตั้งแต่สามเดือนถึงสองปี หรือปรับตั้งแต่หนึ่งแสนบาทถึงสิบล้านบาท หรือทั้งจำทั้งปรับ ผู้ใดขัดขวางหรือไม่อำนวยความสะดวกแก่พนักงานเจ้าหน้าที่ซึ่งปฏิบัติหน้าที่ตามมาตรา 47 (2) ต้องระวางโทษปรับไม่เกินห้าพันบาท</p>
            <br>
            <b>มาตรา 59</b>
            <p>ผู้ใดขัดขวางหรือไม่อำนวยความสะดวกแก่พนักงานเจ้าหน้าที่ซึ่งปฏิบัติหน้าที่ตามมาตรา 47 (2) ต้องระวางโทษปรับไม่เกินห้าพันบาท</p>
            <br>
            <b>มาตรา 60</b>
            <p>ในกรณีที่ผู้กระทำความผิดซึ่งต้องรับโทษตามพระราชบัญญัตินี้เป็นนิติบุคคล กรรมการ หรือผู้จัดการของนิติบุคคลนั้น หรือบุคคลใดซึ่งรับผิดชอบในการดำเนินงานของนิติบุคคลนั้น ต้องระวางโทษตามที่บัญญัติไว้สำหรับความผิดนั้นๆ ด้วย เว้นแต่จะพิสูจน์ได้ว่าตนมิได้มีส่วนในการกระทำความผิดนั้น</p>
            <br>
            <b>มาตรา 61</b>
            <p>บรรดาความผิดตามพระราชบัญญัตินี้ ให้คณะกรรมการเปรียบเทียบคดีที่รัฐมนตรีแต่งตั้งจากเจ้าหน้าที่ของรัฐซึ่งเป็นผู้ทรงคุณวุฒิในทางกฎหมายสามคนมีอำนาจเปรียบเทียบได้ และเมื่อผู้กระทำความผิดได้ชำระค่าปรับตามจำนวนที่ได้เปรียบเทียบภายในระยะเวลาที่คณะกรรมการเปรียบเทียบคดีกำหนดแล้ว ให้ถือว่าคดีเลิกกันตามประมวลกฎหมายวิธีพิจารณาความอาญา</p>
            <br>
            <p>ในการสอบสวนถ้าพนักงานสอบสวนพบว่าบุคคลใดกระทำความผิดตามพระราชบัญญัตินี้และบุคคลนั้นยินยอมให้เปรียบเทียบ ให้พนักงานสอบสวนส่งเรื่องให้คณะกรรมการเปรียบเทียบคดีตามวรรคหนึ่งภายในเจ็ดวัน นับแต่วันที่ผู้นั้นแสดงความยินยอมให้เปรียบเทียบ</p>
            <br>
            <h5>สรุป</h5>
            <p>การเพิ่มขึ้นของประชากร การพัฒนาเศรษฐกิจและสังคมอย่างรวดเร็ว ทำให้มีความต้องการใช้พลังงานเพิ่มมากขึ้น ในขณะที่พลังงานมีจำกัดและขาดแคลน จึงมีการกำหนดนโยบายและมาตรการต่างๆ เพื่ออนุรักษ์พลังงาน รวมทั้งการจัดทำกฎหมายอนุรักษ์พลังงานที่เรียกว่า “พระราชบัญญัติการส่งเสริมการอนุรักษ์พลังงาน พ.ศ. 2535” โดยมีวัตถุประสงค์เพื่อกำกับดูแล ส่งเสริม ให้อาคารควบคุมและโรงงานควบคุมอนุรักษ์พลังงานด้วยการผลิตและการใช้พลังงานอย่างมีประสิทธิภาพและประหยัด ส่งเสริมและสนับสนุนให้มีการผลิตเครื่องจักรอุปกรณ์ที่มีประสิทธิภาพ จัดตั้งกองทุนเพื่อส่งเสริมการอนุรักษ์พลังงาน ส่วนกลุ่มเป้าหมายหลักของการอนุรักษ์พลังงานคือโรงงานควบคุม อาคารควบคุม และผู้ผลิตหรือจำหน่ายเครื่องจักรอุปกรณ์ที่มีประสิทธิภาพสูงและวัสดุที่ใช้ในการอนุรักษ์พลังงาน</p>
        <!-- ลิงค์วีดีโอจากยูทูป -->
        <div class="ratio ratio-16x9">
  <iframe src="https://www.youtube.com/embed/-Wu4xhhreFM" title="YouTube video" allowfullscreen></iframe>
</div>
    <script src="jQuery/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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