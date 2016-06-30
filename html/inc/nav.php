<nav>
    <ol>
        <?php
        foreach($toplevels as $toplevel) {
        ?>
            <li>
                <a href="<?= $toplevel ?>"><?= ucwords($toplevel) ?></a>
                <ol>
                    <?php
                    $quarks = dir(dirname(__DIR__) . '/' . $toplevel);
                    while (false !== ($entry = $quarks->read())) {
                        if(substr($entry, -4) == '.php') {
                            $entry = substr($entry, 0, strlen($entry) - 4);
                        }
                        if(substr($entry, 0, 1) == '.') {
                             continue;
                        }
                    ?>
                    <li class="level1"><a href="<?php echo $toplevel; ?>#section-<?= $entry ?>"><?= str_replace('-', ' ', ucwords($entry)) ?></a></li>
                    <?php } ?>
                </ol>
            </li>
        <?php } ?>
    </ol>
</nav>
