<?php if ($this->pageCount > 1): $getParams = $_GET; ?>
<ul class="pagination">
    <?php if (isset($this->previous)): ?>
        <li>
            <?php $getParams['page'] = $previous; ?>
            <a rel="prev" href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>">&laquo;</a>
        </li>
    <?php endif; ?>

    <li class="page-input">
        <form action="<?php echo html_escape($this->url()); ?>" method="get" accept-charset="utf-8">
        <?php
            $hiddenParams = array();
            $entries = explode('&', http_build_query($getParams));
            foreach ($entries as $entry) {
                if(!$entry) {
                    continue;
                }
                list($key, $value) = explode('=', $entry);
                $hiddenParams[urldecode($key)] = urldecode($value);
            }
        
            foreach($hiddenParams as $key => $value) {
                if($key != 'page') {
                    echo $this->formHidden($key,$value);
                }
            }
        
            // Manually create this input to allow an omitted ID
            $pageInput = '<input type="text" name="page" title="'
                        . html_escape(__('Current Page'))
                        . '" value="'
                        . html_escape($this->current) . '">';
            echo __('%s of %s', $pageInput, $this->last);
        ?>
        </form>
    </li>

    <?php if (isset($this->next)): ?>
        <li>
            <?php $getParams['page'] = $next; ?>
            <a rel="next" href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>">&raquo;</a>
        </li>
    <?php endif; ?>
</ul>

<?php endif; ?>
