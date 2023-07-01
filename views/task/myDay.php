<?php

use thecodeholic\phpmvc\Application;
?>
<html lang="en">

<head>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/task/public/css/style.scss" />
</head>

<body class="code-pen">
<div class="dashboard container  col-sm-12 col-md-8 ">
  <div class="dashboard-content  col-md-12">
    <div class="dashboard-header ">
      <div class="dashboard-header__new col-md-12">
        <div class="title">
          <h3>Gerenciador de Tarefas </h3>
          <div class="task_button">
            <button type="button" style"float:right" class="save_task" id="#exampleModalCenter" onclick="process();">
              +
            </button>
          </div>
        </div>

      </div>
    </div>

    <div class="">
      <div class="dashboard-list">
        <div class="task_container">
          <nav>
            <div class="nav nav-tabs col-md-12" id="nav-tab" role="tablist">
              <button class="nav-link nav_task active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Todas</button>
              <button class="nav-link  nav_task" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pendentes</button>
              <button class="nav-link  nav_task" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Concluídas</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <ul class="task_list">
                <?php foreach ($tasks as $index => $task) : ?>
                  <li class="task_item">
                    <div class="task_title">
                      <?php if ($task['status'] == 0) : ?>

                        <input type="checkbox" class="checkbox" style="display: flex;float: left;" class="task_index" name="scales" id="task_index-<?= $task['task_id'] ?>" onclick="check(1, <?= $task['task_id'] ?> )">
                        <label for="scales" id="task_label-<?= $task['task_id'] ?>" contenteditable="true" onkeyup="edit_task(<?= $task['task_id'] ?>)"><?= $task['name'] ?></label>
                      <?php else : ?>

                        <input type="checkbox" class="checkbox" style="display: flex;float: left;" class="task_index" name="scales" id="task_index-<?= $task['task_id'] ?>" onclick="check(0, <?= $task['task_id'] ?>)" checked="checked">
                        <label for="scales" id="task_label-<?= $task['task_id'] ?>" contenteditable="true" onkeyup="edit_task(<?= $task['task_id'] ?>)"><?= $task['name'] ?></label>

                      <?php endif ?>
                    </div>

                    <div class="task_body">
                      <div class="task_description">
                        <h6 contenteditable="true" id="task_description-<?= $task['task_id'] ?>" onkeyup="edit_task_description(<?= $task['task_id'] ?>)"><?= $task['description'] ?></h6>
                      </div>
                      <div>
                        <form action="../../task/public/delete" method="get">
                          <input type="hidden" id="task_id" name="task_id" value="<?= $task['task_id'] ?>">
                          <button type="submit" class="delete-task center"><i class="fa fa-trash" style="float: right;"></i></button>
                        </form>
                      </div>
                    </div>
                  </li>

                <?php endforeach ?>
              </ul>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <ul class="task_list">
                <?php foreach ($tasks as $index => $task) : ?>
                  <?php if ($task['status'] == 0) : ?>
                    <li class="task_item">
                      <div class="task_title">
                        <?php if ($task['status'] == 0) : ?>

                          <input type="checkbox" class="checkbox" style="display: flex;float: left;" class="task_index" name="scales" id="task_index-<?= $task['task_id'] ?>" onclick="check(1, <?= $task['task_id'] ?> )">
                          <label for="scales" id="task_label-<?= $task['task_id'] ?>" contenteditable="true" onkeyup="edit_task(<?= $task['task_id'] ?>)"><?= $task['name'] ?></label>


                        <?php else : ?>

                          <input type="checkbox" class="checkbox" style="display: flex;float: left;" class="task_index" name="scales" id="task_index-<?= $task['task_id'] ?>" onclick="check(0, <?= $task['task_id'] ?>)" checked="checked">
                          <label for="scales" id="task_label-<?= $task['task_id'] ?>" contenteditable="true" onkeyup="edit_task(<?= $task['task_id'] ?>)"><?= $task['name'] ?></label>

                        <?php endif ?>
                      </div>

                      <div class="task_body">
                        <div class="task_description">
                          <h6 contenteditable="true" id="task_description-<?= $task['task_id'] ?>" onkeyup="edit_task_description(<?= $task['task_id'] ?>)"><?= $task['description'] ?></h6>
                        </div>
                        <div>
                          <form action="../../task/public/delete" method="get">
                            <input type="hidden" id="task_id" name="task_id" value="<?= $task['task_id'] ?>">
                            <button type="submit" class="delete-task center"><i class="fa fa-trash" style="float: right;"></i></button>
                          </form>

                        </div>
                      </div>
                    </li>
                  <?php endif ?>
                <?php endforeach ?>
              </ul>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

              <ul class="task_list">
                <?php foreach ($tasks as $index => $task) : ?>
                  <?php if ($task['status'] == 1) : ?>
                    <li class="task_item">
                      <div class="task_title">
                        <?php if ($task['status'] == 0) : ?>

                          <input type="checkbox" class="checkbox" style="display: flex;float: left;" class="task_index" name="scales" id="task_index-<?= $task['task_id'] ?>" onclick="check(1, <?= $task['task_id'] ?> )">
                          <label for="scales" id="task_label-<?= $task['task_id'] ?>" contenteditable="true" onkeyup="edit_task(<?= $task['task_id'] ?>)"><?= $task['name'] ?></label>
                        <?php else : ?>

                          <input type="checkbox" class="checkbox" style="display: flex;float: left;" class="task_index" name="scales" id="task_index-<?= $task['task_id'] ?>" onclick="check(0, <?= $task['task_id'] ?>)" checked="checked">
                          <label for="scales" id="task_label-<?= $task['task_id'] ?>" contenteditable="true" onkeyup="edit_task(<?= $task['task_id'] ?>)"><?= $task['name'] ?></label>
                        <?php endif ?>
                      </div>
                      <div class="task_body">
                        <div class="task_description">
                          <h6 contenteditable="true" id="task_description-<?= $task['task_id'] ?>" onkeyup="edit_task_description(<?= $task['task_id'] ?>)"><?= $task['description'] ?></h6>
                        </div>
                        <div>
                          <form action="../../task/public/delete" method="get">
                            <input type="hidden" id="task_id" name="task_id" value="<?= $task['task_id'] ?>">
                            <button type="submit" class="delete-task center"><i class="fa fa-trash" style="float: right;"></i></button>
                          </form>
                        </div>
                      </div>
                    </li>
                  <?php endif ?>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Cadastrar nova tarefa</h6>
        <hr>
        <form action="/../../task/public/save-task" method="get">

          <div class="register_task">
            <div class="col-md-12 register_task_item">
              <input type="hidden" name="status" value="0">
              <h6>Name</h6>
              <input placeholder="Estudar" id="mySelectedValue" class="input-subtask" name="name" type="text"><span class="highlight"></span><span class="bar"></span></input>
            </div>
            <div class="col-md-12 register_task_item">
              <h6>Descrição</h6>
              <textarea type="text" name="description" placeholder="Estudar PHP"></textarea>
            </div>
            <div class="col-md-12 register_task_item">
              <button type="submit" class="save-subtask">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
<script type="text/javascript">
  (function() {
    $('.dashboard-nav__item').on('click', function(e) {
      var itemId;
      e.preventDefault();
      $('.dashboard-nav__item').removeClass('dashboard-nav__item--selected');
      $(this).addClass('dashboard-nav__item--selected');
      itemId = $(this).children().attr('href');
      $('.dashboard-content__panel').hide();
      $('.dashboard-content__panel[data-panel-id=' + itemId + ']').show();
      if (itemId === 'my_trip') {
        $('.dashboard-preview').show();
      } else {
        $('.dashboard-preview').hide();
      }
      return console.log(itemId);
    });

    $('.dashboard-list__item').on('click', function(e) {
      var itemId;
      e.preventDefault();
      $('.dashboard-list__item').removeClass('dashboard-list__item--active');
      $(this).addClass('dashboard-list__item--active');
      itemId = $(this).attr('data-item-id');
      $('.dashboard-preview__panel').hide();
      $('.dashboard-preview__panel[data-panel-id=' + itemId + ']').show();
      return console.log(itemId);
    });

  }).call(this);

  function printValue(selectedItem) {
    $('#mySelectedValue').html(selectedItem.value);
    console.log(selectedItem.value);
  }

  function process(selectedItem) {
    $('#exampleModalCenter').modal('show')
    document.getElementById('#exampleModalCenter')

  }

  function optionClick(selectedItem) {
    printValue(selectedItem);
  }

  function edit_task(idTask) {
    $("#task_label-" + idTask).on('keyup', function(event) {
      if (event.keyCode === 13) {
        var task = document.getElementById("task_label-" + idTask).textContent;
        window.location.href = "/../../task/public/edit-task?task_id=" + idTask + "&name=" + task;
      }
    });
  }

  function edit_task_description(idTask) {
    $("#task_description-" + idTask).on('keyup', function(event) {
      if (event.keyCode === 13) {
        var task = document.getElementById("task_description-" + idTask).textContent;
        window.location.href = "/../../task/public/edit-task-description?task_id=" + idTask + "&description=" + task;
      }
    });
  }

  function check(value, idTask) {
    if (window.confirm("Você tem certeza que deseja alterar o status da tarefa?") == true) {
      window.location.href = "../../task/public/update-status?task_id=" + idTask + "&status=" + value;
    } else {
      document.getElementById("task_index-" + idTask).checked = false;
    }
  }
</script>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</html>