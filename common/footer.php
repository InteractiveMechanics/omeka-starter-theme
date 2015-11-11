      </div>
    </main>
    <footer role="contentinfo">
        <hr>
        <div class="container">
            <p class="text-center">
                <?php echo __('Copyright &copy; ') . date('Y') . ' ' . link_to_home_page() . ', All Rights Reserved.'; ?><br>
                <?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?>
            </p>
        </div>
        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
    </footer>
</body>
</html>
