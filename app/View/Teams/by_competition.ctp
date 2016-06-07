<svg width="22px" height="18px" viewBox="0 0 22 18" xmlns="http://www.w3.org/2000/svg">
    <defs>
    <g id="shirt" stroke="none" stroke-width="1" style="fill:inherit">
        <g id="Iconography" transform="translate(-367.000000, -111.000000)">
            <path d="M382,129 L374,129 C373.447715,129 373,128.552285 373,128 L373,120.07 L371.7,121.12 C371.31,121.5 370.68,121.5 370.29,121.12 L367.46,118.29 C367.07,117.9 367.07,117.27 367.46,116.88 L373.34,111 L375,111 C375,112.1 376.34,113 378,113 C379.66,113 381,112.1 381,111 L382.66,111 L388.54,116.88 C388.93,117.27 388.93,117.9 388.54,118.29 L385.71,121.12 C385.32,121.5 384.69,121.5 384.3,121.12 L383,120.07 L383,128 C383,128.552285 382.552285,129 382,129 L382,129 Z" id="Path"></path>
        </g>
    </g>
    </defs>
</svg>
<?php 
$previous_comp = ''; 
$ul = 'flex-cols'; 

if(isset($this->params['named']['context'])) {
    $ul = ''; 
}

foreach($teams as $team) : 
    if($team['Competition']['id'] != $previous_comp) :
        echo ($previous_comp != '') ? '</ul></div>' : '';
    ?>
    <div class="group">
    <h3><?php echo $this->Html->competitionLink($team['Competition']); ?></h3>
    <ul class="<?php echo $ul; ?>">
    <?php endif;
    $previous_comp = $team['Competition']['id'];
    ?>   
    <li><svg width="20px" height="20px" ><use xlink:href="#shirt" style="fill:<?php echo $team['Theme']['primary_colour']; ?>" /></svg><?php echo $this->Html->teamLink($team['Team']); ?></li>
<?php endforeach; ?>
</ul>
</div>