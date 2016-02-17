<div id="sidebar">
  <div class="col-md-4">
    <?php if ( is_active_sidebar( 'sidebar-lebar' ) ) : ?>  
      <div id="lebar">
          <ul>          
           <?php dynamic_sidebar( 'sidebar-lebar' ); ?>    
          </ul>
      </div>
    <?php endif; ?>

    <div id="kiri">
      <ul>
        <?php if ( ! dynamic_sidebar( 'sidebar-kiri' ) ) : ?>
        <!-- KODE-KODE DEFAULT UNTUK SIDEBAR KIRI -->
        <?php endif; ?>
      </ul>
    </div>

    <div id="kanan">
      <ul>
        <?php if ( ! dynamic_sidebar( 'sidebar-kanan' ) ) : ?>
        <!-- KODE-KODE DEFAULT UNTUK SIDEBAR KANAN -->
        <?php endif; ?>
      </ul>
    </div>

    </div>
    </div>
     <div style="clear:both;"></div>