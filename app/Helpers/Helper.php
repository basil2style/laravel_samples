if (! function_exists('hakuna_matata')) {
    function hakuna_matata($name = null) {
        if ($name) {
            return "Hakuna Matata, {$name}!";
        }
        return 'Hakuna Matata!';
    }
}