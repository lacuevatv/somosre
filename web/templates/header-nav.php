<nav>
	<div class="sup-nav-wrapper">

        <a href="tel:08104449797" class="call-center">
            Call center 0810.444.9797
        </a>

        <ul class="sup-nav">
            <li>
                <a href="<?php echo ACCESOAGENCIAS; ?>" class="a-agencias">
                    <span class="agencias-button">Acceso Agencias</span>
                </a>
            </li>
            <li>
                <a href="<?php echo LINK_INSTAGRAM; ?>" class="a-instagram">
                    <span class="sr-only">Instagram</span>
                </a>
            </li>
            <li>
                <a href="<?php echo LINK_FACEBOOK; ?>" class="a-facebook">
                    <span class="sr-only">Facebook</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-nav-wrapper">
        
        <a href="<?php echo MAINSURL; ?>" class="brand-name">
            <span class="sr-only">Somos Re</span>
        </a>

        <button class="toggle" role="menu">
            <span class="sr-only">Toggle</span>
            <span class="tog1"></span>
            <span class="tog2"></span>
            <span class="tog3"></span>
        </button>

        <ul class="main-menu">

            <?php global $menus;
            foreach ($menus['menuHeader'] as $menu ) {
                if ( PAGEACTUAL == 'inicio' ) : 
                ?>
               <li>
                    <a href="<?php echo $menu['slug']; ?>" title="<?php echo $menu['nombre']; ?>"<?php if ( $menu['link_externo'] ) {echo ' target="_blank"'; } ?> <?php if ( !($menu['link_externo']) ) {echo 'class="scroll-to"'; } ?>>
                        <?php echo $menu['nombre']; ?>
                    </a>
                </li> 
                <?php else : ?>
                <li>
                    <a href="<?php echo MAINSURL . '/#' . $menu['slug']; ?>" title="<?php echo $menu['nombre']; ?>"<?php if ( $menu['link_externo'] ) {echo ' target="_blank"'; } ?>>
                        <?php echo $menu['nombre']; ?>
                    </a>
                </li> 
                <?php 
				endif;
            } ?>
            
        </ul>
    </div>
</nav>