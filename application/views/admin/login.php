<!DOCTYPE html>
<html>
<head>
    <title>SO - PT AGI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style type="text/css">
        .form-icon img{
            width: 90px;
            height: 90px;
            position: relative;
            bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="demo form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-12 col-md-12 col-sm-offset-12 col-sm-12">
                    <div class="form-container">
                        <h3 class="title"><strong>LOGIN MEMBER</strong></h3>
                        <?php echo form_open(base_url('login'),'class="form-horizontal validate-form"') ?>
                        <!-- <form class="form-horizontal"> -->
                            <div class="form-icon">
                                <img src="<?php echo base_url() ?>/assets/img/pp.png">
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button class="btn signin" id="btn-submit" type="submit">Login</button>
                        <!-- </form> -->
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/css/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/toastr.min.js"></script>
    
    <?php if($this->session->flashdata('sukses')) { ?>
      <script type="text/javascript">
        var pesan = '<?php echo $this->session->flashdata('sukses') ?>'
        toastr.success(pesan);
      </script>
    <?php }else if($this->session->flashdata('warning')){ ?>
      <script type="text/javascript">
        var pesan = '<?php echo $this->session->flashdata('warning') ?>'
        toastr.error(pesan);
      </script>
    <?php }; ?>
</body>
</html>