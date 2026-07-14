<div class="panel panel-default">

    <div class="panel-heading">
        <h3>{$heading_title}</h3>
        <small>{$text_version}</small>
    </div>

    <div class="panel-body">

        <div class="row">

            {foreach $buttons as $button}

            <div class="col-md-4">

                <a class="btn btn-primary btn-lg btn-block"
                   href="{$button.url}">

                    <i class="fa {$button.icon}"></i>

                    {$button.title}

                </a>

            </div>

            {/foreach}

        </div>

    </div>

</div>