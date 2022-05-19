
        </div>

        <?php
            if(!empty($_SESSION['message'])):
        ?>
        <div class="position-fixed bottom-0 left-0 mx-3 my-5">
            <div class="toast align-items-center text-white bg-<?php echo $_SESSION['message']['type']; ?> border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <?php echo $_SESSION['message']['content']; ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        
        <script src="<?php echo url('js/jquery-3.6.0.min.js'); ?>"></script>
        <script src="<?php echo url('js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo url('js/cms.js'); ?>"></script>
    </body>
</html>