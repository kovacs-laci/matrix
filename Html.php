<?php

require_once 'Helper.php';
class Html
{
    static function head()
    {
        echo <<<HTML
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <link rel="stylesheet" type="text/css" href="matrix.css">
                <title>Mátrix</title>
            </head>
        HTML;
    }

    static function body()
    {
        echo "<body>";

    }

    static function footer()
    {
        echo <<<HTML
                <footer>Kovács László, 2025</footer>
            </body>
            </html>
        HTML;
    }

    private static function tableHead($n)
    {
        echo '
            <table>
                <thead>
                    <tr>';
                    for ($i = 0; $i < $n; $i++) {
                        echo "<th>" . $i + 1 . "</th>";
                }
        echo '
                    </tr>
                </thead>
            <tbody>';
    }

    private static function tableFooter($n)
    {
        echo '</tbody><tfoot><tr>';
        for ($i = 0; $i < $n; $i++) {
            echo "<td>&nbsp;</td>";
        }
        echo '</tr></tfoot></table><br>';
    }

    private static function tableRow($n, $data)
    {
        echo '<tr>';
        for ($i = 0; $i < $n; $i++) {
            $class = self::getClass($data[$i]);
            echo "<td $class>{$data[$i]}</td>";
        }
        echo '</tr>';
    }

    static function table($n, $data)
    {
        self::tableHead($n);
        for ($i = 0; $i < $n; $i++) {
            self::tableRow($n, $data[$i]);
        }
        self::tableFooter($n);
    }

    private static function getClass(int $number): string
    {
        if (Helper::isEven($number)) {
            return ' class="even"';
        }

        return '';
    }

}
