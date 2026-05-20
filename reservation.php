<?php 

include_once("includes/header.php"); 
?>

<?php include_once("includes/header.php"); ?>

<a href="javascript:history.back()" class="btn btn-secondary mb-3">
  <i class="bi bi-arrow-left"></i> Назад
</a>

<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">ID</th>
      <th class="th-sm">Країна</th>
      <th class="th-sm">Номер</th>
      <th class="th-sm">Дата заїзду</th>
      <th class="th-sm">Дата виїзду</th>
      <th class="th-sm">Кількість номерів</th>
      <th class="th-sm">Дорослі</th>
      <th class="th-sm">Діти</th>
      <th class="th-sm">Ім’я</th>
      <th class="th-sm">Прізвище</th>
      <th class="th-sm">Електронна пошта</th>
      <th class="th-sm">Телефон</th>
    </tr>
  </thead>

  <tbody>
    <?php
      $query = "SELECT * FROM reservation ORDER BY Id ASC";
      $result = mysqli_query($link, $query);

      if(mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <form method="post" action="reservation.php?action=add&Id=<?php echo $row['Id']; ?>">
          <td><?php echo $row['Id']; ?></td>
          <td><?php echo $row['country']; ?></td>
          <td><?php echo $row['rooms']; ?></td>
          <td><?php echo $row['checkin']; ?></td>
          <td><?php echo $row['checkout']; ?></td>
          <td><?php echo $row['norooms']; ?></td>
          <td><?php echo $row['noadults']; ?></td>
          <td><?php echo $row['nochildren']; ?></td>
          <td><?php echo $row['firstname']; ?></td>
          <td><?php echo $row['lastname']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['phone']; ?></td>
        </form>
      </tr>
    <?php
          }
      }
    ?>
  </tbody>
</table>

<?php 
include_once("includes/footer.php"); 
?>
