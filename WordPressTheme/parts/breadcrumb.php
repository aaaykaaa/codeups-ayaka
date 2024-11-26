<div class="breadcrumb <?php echo is_404() ? 'breadcrumb--404' : 'sub-breadcrumb'; ?>">
    <div class="breadcrumb__inner">
        <div class="inner">
        <?php if(function_exists('bcn_display')){
            bcn_display();
        }?>
        </div>
    </div>
</div>