<?php
$name = "Алла";
$prof = "Студент";
$city = "Тбилиси";
$works = [
    [
      "name" => "Студентка",
      "dataStart" => "Август 2022",
      "dataEnd" => "настоящее время",
      "description" => "Обучение на факультете Разработчик. Совсем новая область для меня.", 
    ],
    [
      "name" => "Врач-кардиолог",
      "dataStart" => "Апрель 2014",
      "dataEnd" => "Август 2022",
      "description" => "Я повышала квалификацию, поменяла специализацию на кардиологию. Сдавала экзамены 
      и получала категории. Несколько лет совмещала работу в государственной и частной медицине, а последние 4 года работала в частной клинике.", 
    ],
    [
        "name" => "Врач-терапевт",
        "dataStart" => "Август 2009",
        "dataEnd" => "Апрель 2014",
        "description" => "В разных населенных пунктах от Минска до небольшого городка который был зоной отселения после аварии на Чернобыльской АЭС
        работала врачом-терапевтом в отделении реабилитации, в поликлинике, в больнице,
        был период даже в небольшой амбулатории в военном городке.",
    ],
    [
      "name" => "Врач-интерн",
      "dataStart" => "Август 2008",
      "dataEnd" => "Июль 2009",
      "description" => "Врач-интерн по терапии.",
    ],
];
$skills = [
  [
      'name' => 'Python',
      'percent' => 50,
  ],
  [
      'name' => 'HTML',
      'percent' => 20,
  ],
  [
      'name' => 'Гибкие методологии',
      'percent' => 70,
  ],
  [
      'name' => 'Коммуникация',
      'percent' => 40,
  ],
];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://argumenti.kg/uploads/posts/2022-09/1664382626-1chto-podarit-koshke-na-novyi-god-1.jpg"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?php echo $name; ?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$prof;?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$city;?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Телефон</p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count($skills); $i++):  ?>
            <p><?=$skills[$i]["name"];?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?=$skills[$i]["percent"];?>%"><?=$skills[$i]["percent"];?>%</div>
            </div>
            
            <?php endfor; ?>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Белорусский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
            <?php for ($i = 0; $i < count($works); $i++): ?>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b><?php echo $works[$i]['name']; ?></b></h5>
                    <h6 class="w3-text-teal">
                        <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                        <?=$works[$i]['dataStart'];?> - 
                        <?php if ($i == 0): ?>
                          <span class="w3-tag w3-teal w3-round"><?=$works[$i]['dataEnd'];?></span>
                        <?php else: ?>
                          <?=$works[$i]['dataEnd'];?>
                        <?php endif; ?>  
                      </h6>
                    <p><?=$works[$i]['description'];?></p>
                    <hr>
                </div>
            <?php endfor; ?>
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Belarusian State Medical University</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2002 - 2008</h6>
            <p>Doctor</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1991 - 2002</h6>
            <p>Student</p><br>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>