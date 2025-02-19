
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พลังงานกับการดำรงชีวิต</title>

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


    <div class="container13">
        <div class="child"><h1>พลังงานกับการดำรงชีวิต</h1></div>
        </div>
        <div class="container4">
            <h5>การใช้พลังงานในอดีต</h5><br>
            <p>แต่เดิมมนุษย์มีเพียงอาหารเท่านั้นที่เป็นแหล่งพลังงาน โดยปริมาณที่แต่ละคน ได้รับในแต่ละวันเทียบเท่ากับความร้อนเพียง 2,000 กิโลแคลอรี ต่อมามนุษย์เริ่มรู้จักไฟโดยมีการใช้ไฟทำให้อาหารสุก รู้จักใช้แรงงานสัตว์ในการเพาะปลูก และเริ่มใช้ไม้เป็นเชื้อเพลิงให้ความร้อนในการทำกิจกรรมต่างๆ เช่น ผลิตอาวุธสำหรับล่าสัตว์ และป้องกันตัวในยุคนี้ความจำเป็นในการใช้พลังงานเพิ่มสูงขึ้น ในศตวรรษที่ 1 มนุษย์เริ่มรู้จักทำกังหันวิดน้ำซึ่งมีกำลังเพียงประมาณ 0.3 กิโลวัตต์เท่านั้น ต่อมาศตวรรษที่ 4 สามารถเพิ่มกำลังได้เป็น 2 กิโลวัตต์ในศตวรรษที่ 12 เริ่มรู้จักใช้กังหันลมเพื่อยกของหนัก สูบน้ำ และบดเมล็ดธัญพืช อย่างไรก็ตาม จนถึงยุคก่อนศตวรรษที่ 18 ความต้องการใช้พลังงานก็ยังนับว่าต่ำเมื่อเทียบกับปัจจุบัน มีการใช้พลังงานเพียง 12,000 กิโลแคลอรี ต่อคนต่อวันเท่านั้น และแหล่งพลังงานในสมัยนั้นก็ยังจำกัดอยู่ที่ไม้ และพลังน้ำในรูปกังหันน้ำ ซึ่งมีใช้ กันมากในประเทศอังกฤษ</p><br>
            <p>มนุษย์เริ่มใช้พลังงานในอัตราที่เพิ่มขึ้นอย่างรวดเร็วในยุคปฏิวัติอุตสาหกรรมในศตวรรษที่ 19 ซึ่งมีการประดิษฐ์เครื่องจักรไอน้ำ และเริ่มมีการใช้ถ่านหินเป็นเชื้อเพลิงแทนไม้ และใช้กังหันน้ำและลม ขณะที่ปลายศตวรรษที่ 19 เริ่มมีการใช้ถ่านหินในการผลิตไฟฟ้า ความต้องการใช้พลังงานจึงเพิ่มขึ้น อย่างรวดเร็ว โดยมีค่าเฉลี่ยต่อคนต่อวันเท่ากับ 24,000 กิโลแคลอรี</p>
            <p>ต้นศตวรรษที่ 20 ได้มีการค้นพบปิโตรเลียม ซึ่งเป็นเชื้อเพลิงพลังงานที่มีคุณสมบัติอเนกประสงค์ สามารถใช้ให้แสงสว่าง ใช้ผลิตไฟฟ้า ใช้ขับเคลื่อนเครื่องจักร โดยเฉพาะเครื่องยนต์ที่มีการสันดาป ภายใน นอกจากนี้การขนส่งน้ำมันยังทำได้ง่ายกว่าการขนส่งถ่านหิน ดังนั้นปิโตรเลียมจึงถูกใช้แทน ถ่านหิน ในระยะต่อมามีการใช้ปิโตรเลียมในเครื่องยนต์ และใช้ผลิตไฟฟ้า ทำให้มีการเติบโตทางด้านเศรษฐกิจในประเทศตะวันตก และเป็นจุดสำคัญที่ทำให้การใช้พลังงานของมนุษย์โดยเฉพาะกลุ่ม ประเทศยุโรปตะวันตก และอเมริกาเพิ่มขึ้นอย่างรวดเร็ว และหลังสงครามโลกครั้งที่ 2 ประเทศต่างๆ รวมทั้งประเทศไทยรับเอารูปแบบการใช้ชีวิตของชาวตะวันตกมาเป็นแบบอย่างในการดำรงชีวิต ปริมาณ ความต้องการพลังงานในประเทศเหล่านี้เพิ่มสูงขึ้นอย่างรวดเร็ว มนุษย์ในยุคนี้ใช้พลังงาน 240,000กิโลแคลอรีต่อคนต่อวัน</p>
        </div>
        <div class="container4">
            <h5>วิวัฒนาการการใช้พลังงานของมนุษย์</h5>
            <p>มนุษย์รู้จักรับประทานอาหารเพื่อให้เกิดพลังงานสะสมในร่างกาย และนำพลังงานนั้นไปใช้ในการ เคลื่อนไหวต่างๆ ต่อมาจึงรู้จักนำสัตว์มาฝึกเพื่อใช้แรงงานทำงานแทน พลังงานที่มนุษย์นำมาใช้ใน ยุคแรกๆ ได้แก่ พลังงานจากแรงงานมนุษย์และสัตว์ ต่อมามนุษย์ได้มีการพัฒนานำพลังงานที่ได้จากธรรมชาติ มาใช้ให้เกิดประโยชน์มากขึ้น เช่น พลังงานน้ำ พลังงานลม พลังงานแสงอาทิตย์ พลังงานความร้อน ที่ได้จากการเผาไหม้ไม้ ฟื้น หรือถ่านหิน เมื่อมนุษย์มีวิวัฒนาการทางด้านวิชาการดีขึ้น สามารถค้นคว้า และนำพลังงานรูปแบบต่างๆ ที่ดีกว่ามาใช้ให้เกิดประโยชน์มากมาย เช่น พลังงานที่ได้จากน้ำมัน และ จึงเป็นก๊าซธรรมชาติ ซึ่งเป็นพลังงานจากปิโตรเลียม เพราะจะให้ประโยชน์และสะดวกต่อการใช้งานมากพลังงานที่นำมาใช้มากที่สุดในปัจจุบัน</p>
            <p>วิวัฒนาการการค้นพบพลังงานกับการนำมาใช้นั้น มีความเป็นมาควบคู่กับความเจริญก้าวหน้าของอารยธรรมมนุษย์ นักวิทยาศาสตร์ได้แบ่งยุคสมัยของความเจริญทางอารยธรรมของมนุษย์ตาม วิวัฒนาการในการใช้พลังงาน ดังนี้</p>
          
          
        </div>
        <div class="container4">
            <h5>ความเป็นมาของการใช้พลังงานในประเทศไทย</h5>
            <p>การใช้พลังงานในอดีตตั้งแต่สมัยสุโขทัย อยุธยา จนถึงรัตนโกสินทร์ตอนต้น ส่วนใหญ่เป็นการใช้ ความร้อน และแสงสว่างในเวลากลางคืน มีส่วนน้อยที่ใช้ผลิตในงานหัตถกรรม เช่น ทำเครื่องถ้วยชาม สังคโลก หรือหล่อพระพุทธรูป ทำอาวุธ และก่อสร้าง เชื้อเพลิงที่ใช้ส่วนใหญ่เป็นเชื้อเพลิงชีวภาพ เช่น ฟิน ถ่าน และแกลบ สำหรับเชื้อเพลิงพลังงานที่ให้แสงสว่างมักใช้น้ำมันพืชหรือไขสัตว์</p><br>
            <p>การใช้พลังงานยุคใหม่ของไทย เริ่มในรัชสมัยของพระบาทสมเด็จพระจอมเกล้าเจ้าอยู่หัว โดยเริ่ม มีโรงสีไฟที่ใช้เครื่องจักรไอน้ำ แต่ก็ยังใช้แกลบเป็นเชื้อเพลิง ต่อมาในรัชสมัยของพระบาทสมเด็จ พระจุลจอมเกล้าเจ้าอยู่หัว ประเทศไทยเริ่มพัฒนาตามแบบยุโรป มีการจัดสร้างสาธารณูปโภคใหม่ๆ ขึ้น เช่น รถไฟ และเรือกำปั่น แต่ก็ยังใช้พลังงานประเภทฟิน และแกลบอยู่ จนมีการสั่งซื้อยานพาหนะ ประเภทรถยนต์เข้ามา จึงต้องนำเข้าน้ำมันเบนซินเพื่อใช้กับรถ รวมทั้งนำเข้าน้ำมันก๊าด เพื่อใช้จุดตะเกียง ห้แสงสว่างตามถนนหนทาง และบ้านเรือน</p>
          
            <p>กิจการไฟฟ้าในประเทศไทยเริ่มดำเนินการในปี พ.ศ. 2427 สมัยรัชกาลที่ 5 โดยจอมพลเจ้าพระยาสุรศักดิ์ มนตรี (เจิม แสงชูโต) ซึ่งขณะนั้นดำรงตำแหน่งหมื่นไวยวรนาถ ได้ซื้อเครื่องกำเนิดไฟฟ้า 2 เครื่อง พร้อมอุปกรณ์โคมไฟฟ้า จากสหราชอาณาจักรมาติดตั้งที่กรมทหารม้าหน้ากระทรวง กลาโหมปัจจุบัน และจ่ายไฟฟ้าเพื่อใช้ในพระบรมมหาราชวัง เป็นครั้งแรกเมื่อวันที่ 20 กันยายน พ.ศ. 2427 ซึ่งเป็น วันคล้ายวันพระราชสมภพของรัชกาลที่ 5 นับได้ว่า ประเทศไทยนำไฟฟ้ามาใช้ก่อนประเทศใดในทวีปเอเชีย ต่อมาในปี พ.ศ. 2437 รัฐบาลไทยในสมัยนั้นเห็นความ สำคัญของการใช้ไฟฟ้า จึงได้ทำสัญญาผลิตและส่งกระแส ไฟฟ้าไปใช้ในส่วนราชการ และถนนหลวง</p>
            <p>การผลิตกระแสไฟฟ้าได้ดำเนินการโดยหลายบริษัท จนกระทั่งการไฟฟ้านครหลวงได้สร้างโรงไฟฟ้า ขึ้นที่วัดเลียบ เป็นโรงไฟฟ้าพลังความร้อนที่มีกำลังผลิต 1,250-6,000 กิโลวัตต์ รัฐบาลไทยได้เข้าไปมี หน้าที่ควบคุม และผลิตโดยตรงตั้งแต่ พ.ศ. 2493 และใน พ.ศ. 2455 ได้สร้างโรงไฟฟ้าอีกแห่งที่สามเสน เพื่อนำไฟฟ้าไปใช้ในการผลิตน้ำประปา และจ่ายกระแสไฟฟ้าบางส่วนให้ประชาชนด้วย สำหรับต่างจังหวัด ที่จังหวัดราชบุรี มีไฟฟ้าใช้เมื่อ พ.ศ. 2460 และจังหวัดเชียงใหม่มีไฟฟ้าใช้เมื่อ พ.ศ. 2474</p>
          
            <p>หลังสงครามโลกครั้งที่ 2 สิ้นสุดลง พลังงานที่ใช้ในการผลิตกระแสไฟฟ้าหายาก และมีราคาสูง และโรงไฟฟ้าที่มีอยู่เสียหายจากระเบิด รัฐบาลไทยจึงศึกษาหาวิธีผลิตกระแสไฟฟ้าโดยพลังงานอื่นๆ ในปี พ.ศ. 2500 โรงไฟฟ้าพลังน้ำจากเขื่อนภูมิพล จังหวัดตาก ได้สร้างขึ้นเพื่อผลิตกระแสไฟฟ้า แก่จังหวัดในภาคเหนือ และภาคกลาง รวม 36 จังหวัด ส่วนโรงไฟฟ้าถ่านหินลิกไนต์ที่อำเภอแม่เมาะ จังหวัดลำปาง ได้สร้างขึ้นในปี พ.ศ. 2503 ต่อมาการผลิตกระแสไฟฟ้าได้กระจายไปทั่วประเทศอย่าง รวดเร็ว และมีการนำพลังงานหลายประเภทมาใช้ในการผลิตกระแสไฟฟ้า เช่น น้ำมัน ก๊าซธรรมชาติ พลังน้ำ ถ่านหินลิกไนต์ รวมทั้งพลังงานจากแสงอาทิตย์ จากความร้อนใต้พิภพ และจากชีวมวล</p>
        </div>
        <div class="container4">
            <h5>การใช้พลังงานมาใช้เพื่อพัฒนาประเทศ</h5>
            <p>พลังงานส่วนใหญ่เมื่อมีการนำมาใช้ประโยชน์โดยมีการแปรรูปตามขั้นตอนต่างๆ รูปแบบสุดท้าย ของพลังงานที่ได้มักจะอยู่ในรูปของความร้อน งานกล และไฟฟ้า ความร้อนจะถูกนำไปใช้ประโยชน์ใน</p>
            <p>กระบวนการผลิตต่างๆ ในอุตสาหกรรม งานกลจะถูกนำไปใช้ในการขับเคลื่อนรถยนต์ รถโดยสาร ในระบบ ขนส่งเครื่องจักรในการผลิต และใช้ในการยกสิ่งของ หรือขุดดิน เช่น รถขุดดิน ไฟฟ้าจะถูกนำไปใช้ นเครื่องใช้ไฟฟ้าแบบต่างๆ การจำแนกลักษณะการใช้พลังงานในสาขาเศรษฐกิจต่างๆ มีดังต่อไปนี้</p>
          
            <p>1. การใช้พลังงานในภาคขนส่งและคมนาคม เชื้อเพลิงหลักที่นำมาใช้คือผลิตภัณฑ์จากปิโตรเลียม ได้แก่ น้ำมันสำเร็จรูป หรือรวมเรียกว่า น้ำมันเชื้อเพลิงสำเร็จรูป เพื่อใช้ในการขนส่งสินค้าทางรถยนต์ ทางเรือ และทางเครื่องบิน รวมถึงการขนส่งมวลชน การแปรรูปพลังงาน เริ่มจากพลังงานเคมีที่มีอยู่ในเชื้อเพลิง ภายหลังเผาไหม้จะได้ความร้อน ซึ่งเมื่อนำไปดันลูกสูบในเครื่องยนต์ จะเปลี่ยนไปเป็นงานกลใช้ขับเคลื่อน ยานพาหนะได้ ในกระบวนการแปรรูปพลังงานในแต่ละขั้นตอนมักมีการสูญเสียพลังงานเสมอ และยังมี ความร้อนสูญเสียด้วย</p>
            <p>2. การใช้พลังงานในภาคอุตสาหกรรม พลังงานที่นำมาใช้ประโยชน์ในโรงงานอุตสาหกรรม มักจะอยู่ในรูปของความร้อน และไฟฟ้า ความร้อนอาจเกิดจากการเผาไหม้เชื้อเพลิง ฟอสซิล เช่น การผลิตก๊าซร้อนเพื่อใช้ในการอบแห้ง ความร้อนที่ได้จากการเผาไหม้เชื้อเพลิงอาจมีการนำไปถ่ายเท เป็นทอดๆ เช่น ใช้ผลิตก๊าซร้อนแล้วนำไปผลิตไอน้ำ หลังจากนั้นนำความร้อนในไอน้ำไปถ่ายเทให้กับ กระบวนการผลิตที่ต้องการความร้อนในโรงงานอุตสาหกรรมอาหาร โรงงานย้อมผ้า และอื่นๆ สำหรับ ไฟฟ้าจะถูกนำมาใช้ในการเดินเครื่องจักร และ อุปกรณ์อื่นๆ ในกระบวนการผลิต รวมทั้งระบบปรับ อากาศ และแสงสว่างในโรงงาน</p>
            <p>3. การใช้พลังงานในอาคารพาณิชย์ และบ้านที่อยู่อาศัย การใช้พลังงานส่วนใหญ่ในภาคเศรษฐกิจ ได้แก่ อาคารพาณิชย์ต่างๆ การใช้พลังงานของอาคารดังกล่าวกว่าร้อยละ 50 จะอยู่ในรูปของไฟฟ้า และใน อาคารพาณิชย์ประมาณร้อยละ 60-70 ของไฟฟ้าจะถูกนำไปใช้ในระบบปรับอากาศ และประมาณร้อยละ 10-20 ของไฟฟ้าสำหรับให้แสงสว่าง</p><br>
            <p>ส่วนของบ้านที่อยู่อาศัย การใช้พลังงานส่วนใหญ่อยู่ในรูปพลังงานไฟฟ้าเช่น เดียวกับอาคารพาณิชย์ แต่จุดมุ่งหมายการใช้แตกต่างกันบ้างคือ บ้านที่อยู่อาศัยจะ เน้นความสะดวกสบาย เช่น การให้แสงสว่าง ปรับอากาศ หรือเก็บอาหารในตู้เย็น รีดผ้า นอกจากนี้ยังใช้เพื่อการดำรงชีพ เช่น การประกอบอาหาร</p>
        </div>
        <div class="container4">
        <div class="ratio ratio-16x9">
  <iframe src="https://www.youtube.com/embed/dmXzTJh1jh8" title="YouTube video" allowfullscreen></iframe>
</div>
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
