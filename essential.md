#### Disable foreignKey error when migration
app\Provicers\AppServiceProvider ~> Schema::disableForeignKeyConstraints();

---------------

#### PHPExcel
https://stackoverflow.com/questions/23764375/how-i-can-install-the-phpexcel-library-in-laravel

- Step 3 is automated add

For install PhpExcel in laravel 5.

Please visit this link for pakage -https://packagist.org/packages/phpoffice/phpexcel.

Please follow the instruction --

1:- Add "phpoffice/phpexcel": "dev-master" to your composer.json.

2:- execute "composer update" on terminal.

3:- Open the file "/vendor/composer/autoload_namespaces.php". Paste the below line in the file.


```
'PHPExcel' => array($vendorDir . '/phpoffice/phpexcel/Classes'),
```

4:- Now you can use PHPEXCEL library in your controllers or middleware or library.

```
use PHPExcel; 
use PHPExcel_IOFactory;
```

-------------------------------
