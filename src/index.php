<h2>Design patterns:</h2>
<ul>
    <?php
    $list = [
        [
            'url' => '/AbstractFactory/index.php',
            'name'=> 'AbstractFactory'
        ],
        [
            'url' => '/Builder/index.php',
            'name'=> 'Builder'
        ],
        [
            'url' => '/FactoryMethod/index.php',
            'name'=> 'FactoryMethod'
        ]
    ];
    foreach ($list as $pattern) : ?>
    <li>
        <a href="<?= $pattern['url']?>"><?= $pattern['name']?></a>
    </li>
    <?php endforeach; ?>
</ul>