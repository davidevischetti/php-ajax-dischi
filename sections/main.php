<main>
    <div id="content-container">
        <?php
            foreach ($dischi_arr as $disco) {
                echo "<div>
                        <img src={$disco['poster']} alt={$disco['title']}-logo>
                        <h3>{$disco['title']}</h3>
                        <span>{$disco['author']}</span>
                        <span>{$disco['year']}</span>
                    </div>";
            }
        ?>
    </div>
</main>