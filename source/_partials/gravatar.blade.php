<?php
    $gravatarHash = md5(strtolower(trim($page['gravatar_email'])));
    $gravatarSize = $gravatarSize ?? 200;
?>
<div class="gravatar">
    <img src="https://www.gravatar.com/avatar/{{$gravatarHash}}?s={{$gravatarSize}}" />
</div>
