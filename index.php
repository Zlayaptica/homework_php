<?php
$name = 'Иннокентий';
$prof = 'Мурчатель домашний';
$country = 'Российская Федерация';
$city = 'Барнаул';
$email = 'email@mail.mail';
$tel = '8987654321';

$skills = [
  ['name' => 'Тыгыдыканье ночное', 'percent' => 99],
  ['name' => 'Царапки', 'percent' => 80],
  ['name' => 'Мяуканье', 'percent' => 90],
  ['name' => 'Мурчанье', 'percent' => 100],
];

$workExperience = [
  [
    'jobTitle' => 'Мурчатель домашний',
    'periodStart' => 'сентябрь 2022',
    'periodFinish' => 'по настоящее время',
    'description' => 'Ранее занимался ночными тыгыдыками и шуршанием пакетами, но это не приносило много корма. Поэтому решил заняться саморазвитием и с сентября 2022 занимаюсь мурчание и снимаю стресс у хозяев.'
  ],
  [
    'jobTitle' => 'Шуршатель пакетами',
    'periodStart' => 'май 2021',
    'periodFinish' => 'август 2022',
    'description' => 'Шуршание пакетами в ночное время, сопровождающееся тыгыдыком и боевым кличем "МЯЯЯЯУУУ!". Ночью всегда есть опасность встретить бабайку или получить нападение летающего тапка. '
  ],
  [
    'jobTitle' => 'Грызун царапающийся',
    'periodStart' => 'январь 2021',
    'periodFinish' => 'апрель 2021',
    'description' => 'Атака всего движущегося, яростные кусь и царапульки.'
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
    html, body, h1, h2, h3, h4, h5, h6 {
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
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2>
                <?php echo $name; ?>
              </h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $prof; ?>
            </p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $country . ' ' . $city; ?>
            </p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $email; ?>
            </p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $tel; ?>
            </p>
            <hr>
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php
              for ($i = 0; $i < count($skills); $i++):
                $name = $skills[$i]['name'];
                $percent = $skills[$i]['percent'];
            ?>
            <p>
              <?= $name; ?>
            </p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $percent; ?>%">
                <?php echo $percent; ?>%
              </div>
            </div>
            <?php endfor; ?>
            <br>
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Кошачий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Человечий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Тигриный</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div><br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16">
            <i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>
            Опыт работы
          </h2>
            <?php
            for ($i = 0; $i < count($workExperience); $i++):
              $title = $workExperience[$i]['jobTitle'];
              $start = $workExperience[$i]['periodStart'];
              $finish = $workExperience[$i]['periodFinish'];
              $description = $workExperience[$i]['description'];
              ?>
              <div class="w3-container">
                <h5 class="w3-opacity"><b>
                  <?php echo $title; ?></b>
                </h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
                  <?php echo $start; ?> -
                  <?php if ($finish == 'Current'):?>
                    <span class="w3-tag w3-teal w3-round">
                      <?php echo $finish; ?>
                    </span>
                  <?php else:
                    echo $finish;
                  endif; ?>
                </h6>
                <p>
                  <?php echo $description; ?>
                </p>
                <hr>
              </div>
            <?php endfor; ?>
        </div>
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>mur.mur</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2022-2023</h6>
            <p>Инженер по царапкам)</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Уличная кошачья школа</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2020 - 2021</h6>
            <p>Мастер царапка</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2020 - 2020</h6>
            <p>Специалист в области яростного кусь</p><br>
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
    <p>Соцсети</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>