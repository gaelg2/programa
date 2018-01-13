<?php
require_once __DIR__ . '/../vendor/autoload.php';
$generator = Compose\Factory::create();
$generator->seed(1);
$documentor = new Compose\Documentor($generator);
?>
<?php foreach ($documentor->getFormatters() as $provider => $formatters): ?>

### `<?php echo $provider ?>`

<?php foreach ($formatters as $formatter => $example): ?>
    <?php echo str_pad($formatter, 23) ?><?php if ($example): ?> // <?php echo $example ?> <?php endif; ?>

<?php endforeach; ?>
<?php endforeach;
