<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <link type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/trigger/adm/style.css" rel="stylesheet" /> <!-- the layout css file -->
        <link type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/trigger/adm/jCleditor.css" rel="stylesheet" />

        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/trigger/adm/jQuery.js"></script>	<!-- jquery library -->
        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/trigger/adm/jUi.js"></script> <!-- jquery UI -->
        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/trigger/adm/cufon-yui.js"></script> <!-- Cufon font replacement -->
        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/trigger/adm/ColaborateLight_400.font.js"></script> <!-- the Colaborate Light font -->
        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/trigger/adm/easyTooltip.js"></script> <!-- element tooltips -->
        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/trigger/adm/jTablesorter.js"></script> <!-- tablesorter -->
        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/trigger/adm/jVisualize.js"></script> <!-- visualize plugin for graphs / statistics -->
        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/trigger/adm/iphone-style-checkboxes.js"></script> <!-- iphone like checkboxes -->
        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/trigger/adm/jCleditor.js"></script> <!-- wysiwyg editor -->
        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/js/trigger/adm/custom.js"></script> <!-- the "make them work" script -->
    </head>

    <body>
        <div id="container">
            <div id="bgwrap">
                <div id="primary_left">
                    <div id="logo">
                        <a href="#" title="Dashboard"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/trigger/adm/logo.png" alt="" /></a>
                    </div> <!-- logo end -->

                    <div id="menu"> <!-- navigation menu -->
                        <ul>
                            <li class="tooltip" title="Vote e desculta uma ideia"><a href="#" class="dashboard"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/trigger/adm/icons/small_icons_3/dashboard.png" alt=""/><span class="current">Lista de Ideias</span></a>
                                <ul>
                                    <li><a href="#">Por Pessoa</a></li>
                                    <li><a href="#">Por Categoria</a></li>
                                    <li><a href="#">Linha do Tempo</a></li>
                                    <li><a href="#">Não visualizadas</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/trigger/adm/icons/small_icons_3/posts.png" alt=""/><span>Minhas Ideias</span></a>
                                <ul>
                                    <li><a href="#">Listar</a></li>
                                    <li><a href="#">Adicionar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/trigger/adm/icons/small_icons_3/notes.png" alt=""/><span>Categorias</span></a>
                                <ul>
                                    <li><a href="<?php echo Yii::app()->createUrl("categoria/admin")?>">Listar</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl("categoria/create")?>">Adicionar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/trigger/adm/icons/small_icons_3/users.png" alt=""/><span>Usuários</span></a>
                                <ul>
                                    <li><a href="<?php echo Yii::app()->createUrl("usuario/admin")?>">Listar</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl("usuario/create")?>">Adicionar</a></li>
                                </ul>
                            </li>
                            <!-- <li class="tooltip" title="Menu items can also have a tooltip!"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/trigger/adm/icons/small_icons_3/notes.png" alt=""/><span>My notes</span></a></li>
                            <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/trigger/adm/icons/small_icons_3/coin.png" alt=""/><span>Earnings</span></a></li>
                            <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/trigger/adm/icons/small_icons_3/settings.png" alt=""/><span>Settings</span></a></li> -->
                        </ul>
                    </div> <!-- navigation menu end -->
                </div> <!-- sidebar end -->

                <div id="primary_right">
                    <div class="inner">
                        <?php echo $content; ?>
                    </div>
                </div> <!-- primary_right -->
            </div> <!-- bgwrap -->
        </div> <!-- container -->
    </body>
</html>