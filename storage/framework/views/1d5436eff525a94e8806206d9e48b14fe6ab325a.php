<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <div class="no-print user-panel-unasam">
            <div class="no-print image" style="text-align: center;">
                <img src="<?php echo e(asset('/img/unasam.png')); ?>" alt="User Image" style="margin-top: 15px;height: 80px;" />
                <ul class="no-print sidebar-menu">
                    <li class="no-print stroke treeview"
                        style="font-family: Monotype Corsiva;font-size: 21px;color: #f9c52c;margin-top: 5px;">"Una Nueva
                        Universidad<br>Para el Desarrollo"</li>
                </ul>
            </div>
        </div>

        <hr style="border-top: 1px solid #4d4d4d;">

        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip"
                    title="<?php echo e(Auth::user()->name); ?>"><?php echo e(Auth::user()->name); ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('adminlte_lang::message.online')); ?></a>
            </div>
        </div>
        <?php endif; ?>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENÚ PRINCIPAL</li>
            <!-- Optionally, you can add icons to the links -->


            <li v-bind:class="classMenu0"><a href="<?php echo e(url('home')); ?>"><i class='fa fa-home'></i> <span>Inicio</span></a>
            </li>
            <?php if(accesoUser([1,2,3])): ?>
            <li class="treeview" v-bind:class="classMenu1">
                <a href="#"><i class="fa fa-university"></i> <span>Facultad</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="facultades"><i class='fa fa-gg'></i>Facultad</a></li>
                    <li><a href="descripcionfacultades"><i class='fa fa-gg'></i>Descripcion de Facultad</a></li>
                </ul>
            </li>
            <?php endif; ?>

            <?php if(accesoUser([1,2,3])): ?>
            <li class="treeview" v-bind:class="classMenu2">
                <a href="#"><i class="fa fa-archive"></i><span>Contenido Web Facultad</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="bannersFacultades"><i class='fa fa-gg'></i> Gestión de Banners</a></li>
                    <li><a href="eventos"><i class='fa fa-gg'></i> Gestión de Eventos</a></li>
                    <li><a href="noticias"><i class='fa fa-gg'></i> Gestión de Noticias</a></li>
                    <li><a href="galeriasfacultades"><i class='fa fa-gg'></i> Gestión de Galerias</a></li>
                    <li><a href="videofacultades"><i class='fa fa-gg'></i> Gestión de Videos</a></li>
                    <li><a href="documentofacultades"><i class='fa fa-gg'></i> Gestión de Documentos</a></li>
                    <li><a href="organigramafacultades"><i class='fa fa-gg'></i> Gestión de Organigramas</a></li>
                </ul>
            </li>
            <?php endif; ?>

            <?php if(accesoUser([1,2,3])): ?>
            <li class="treeview" v-bind:class="classMenu3">
                <a href="#"><i class="fa fa-graduation-cap"></i> <span>Escuelas</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="escuelas"><i class='fa fa-gg'></i>Escuelas Profesionales</a></li>
                    <li><a href="descripcionescuelas"><i class='fa fa-gg'></i>Descripcion de Escuelas</a></li>
                    <li><a href="campolaborales"><i class='fa fa-gg'></i>Campo Laboral</a></li>
                    <li><a href="perfiles"><i class='fa fa-gg'></i>Perfil Profesional</a></li>
                </ul>
            </li>
            <?php endif; ?>

            <?php if(accesoUser([1,2,3])): ?>
            <li class="treeview" v-bind:class="classMenu4">
                <a href="#"><i class="fa fa-archive"></i> <span>Contenido Web Escuelas</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="bannersescuelas"><i class='fa fa-gg'></i> Gestión de Banners</a></li>
                    <li><a href="videoescuelas"><i class='fa fa-gg'></i> Gestión de Videos</a></li>
                    <li><a href="galeriaescuelas"><i class='fa fa-gg'></i> Gestión de Galerias</a></li>
                    <li><a href="mallaescuelas"><i class='fa fa-gg'></i> Gestión de Mallas Curriculares</a></li>
                </ul>
            </li>
            <?php endif; ?>

            <?php if(accesoUser([1,2,3])): ?>
            <li class="treeview" v-bind:class="classMenu5">
                <a href="#"><i class='fa fa-list-alt'></i> <span>Autoridades</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="gradoacademicos"><i class='fa fa-gg'></i>Grados Academicos</a></li>
                    <li><a href="cargos"><i class='fa fa-gg'></i>Cargos</a></li>
                    <li><a href="autoridades"><i class='fa fa-gg'></i>Autoridades</a></li>
                </ul>
            </li>
            <?php endif; ?>

            <?php if(accesoUser([1,2,3])): ?>
            <li v-bind:class="classMenu6"><a href="<?php echo e(url('departamentos')); ?>"><i class="fa fa-university"></i>
                    <span>Departamentos Academicos</span></a>
                <?php endif; ?>

                <?php if(accesoUser([1,2,3])): ?>
            <li class="treeview" v-bind:class="classMenu7">
                <a href="#"><i class="fa fa-users"></i><span>Docentes</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="gradoacademicos"><i class='fa fa-gg'></i>Grados Academicos</a></li>
                    <li><a href="catdocentes"><i class='fa fa-gg'></i>Categoria Docentes</a></li>
                    <li><a href="docentes"><i class='fa fa-gg'></i>Docentes</a></li>
                </ul>
            </li>
            <?php endif; ?>

            <?php if(accesoUser([1,2,3])): ?>
            <li class="treeview" v-bind:class="classMenu8">
                <a href="#"><i class="fa fa-child"></i> <span>Alumnos</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="comiteestudiantil"><i class='fa fa-gg'></i>Comites Estudiantiles</a></li>
                    <li><a href="alumnos"><i class='fa fa-gg'></i>Alumnos</a></li>
                </ul>
            </li>
            <?php endif; ?>

            <?php if(accesoUser([1,2,3])): ?>
            <li class="treeview" v-bind:class="classMenu9">
                <a href="#"><i class='fa fa-book'></i> <span>Investigaciones y Libros</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="temas"><i class='fa fa-gg'></i>Tema de Estudio</a></li>
                    <li><a href="investigaciones"><i class='fa fa-gg'></i>Investigaciones</a></li>
                    <li><a href="libros"><i class='fa fa-gg'></i>Libros</a></li>
                </ul>
            </li>
            <?php endif; ?>

            <?php if(accesoUser([1])): ?>
            <li class="treeview" v-bind:class="classMenu10">
                <a href="#"><i class='fa fa-cogs'></i> <span>Configuraciones</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="usuarios"><i class='fa fa-gg'></i> Gestión de Usuarios</a></li>
                </ul>
            </li>
            <?php endif; ?>



            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside><?php /**PATH C:\Users\USUARIO\Desktop\Facus\webFacultades\resources\views/vendor/adminlte/layouts/partials/sidebar.blade.php ENDPATH**/ ?>