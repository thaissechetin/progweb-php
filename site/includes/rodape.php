</main>

<footer>
    <p>Thaís Sechetin - 2022</p>
    
        <?php
        $fuso = new DateTimeZone ("america/sao_paulo");
        $data = new datetime ("now", $fuso);
        echo $data -> format("d/m/Y h:i:s"); ?>
    </div>
</footer>

</body>
</html>