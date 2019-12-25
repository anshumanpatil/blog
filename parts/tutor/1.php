<h5 class="my-3">What we will cover</h5>

<ul class="mb-5">
    <?php
        $str = file_get_contents(dirname($_SERVER["SCRIPT_FILENAME"]) . "/points.json");
        $json = json_decode($str, true);
        foreach ($json['points'] as $field => $value) {
            echo "<li class='mb-2'><a href='#" . $value['div'] . "' class='LinkToGo " . $value['div'] . "'>" . $value['name'] . "</a> </li> ";
        }
    ?>
</ul>