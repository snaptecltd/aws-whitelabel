<div class="whitelabel-box"></div>
<script>
    var whitelabelBox = new Box($('.whitelabel-box'), '{{ action('\Snaptec\Plugin\AwsWhitelabel\Controllers\MainController@connection', $server->uid) }}');
    whitelabelBox.load();

</script>
