<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-warning text-center" role="alert" style="cursor: pointer; margin: 0px" onclick="this.classList.add('hidden');"><?= $message ?></div>
