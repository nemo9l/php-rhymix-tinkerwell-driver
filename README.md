# php-rhymix-tinkerwell-driver
Tinkerwell 3.x Driver for Rhymix 2.x.

## Installation
1. Create .tinkerwell directory to Rhymix root path.
2. Copy [RhymixTinkerwellDriver.php](https://github.com/nemorize/php-rhymix-tinkerwell-driver/blob/main/RhymixTinkerwellDriver.php) to `.tinkerwell/RhymixTinkerwellDriver.php`.
3. Well done! You can now use Rhymix API without any `require` statements in Tinkerwell.

> **Warning!**<br />
> You must install the Rhymix application before you use tinkerwell.<br />
> This driver determines the project with `file_exists($projectPath . '/files/config/config.php')`.
