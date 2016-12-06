hiqdev/hidev-php-cs-fixer
-------------------------

## [Under development]

- Removed (broken) support for version 1
- Fixed `.php_cs` config template for version 2
    - [5db9297] 2016-12-03 fixed `.php_cs` config template for version 2 [sol@hiqdev.com]
    - [397a0e5] 2016-05-28 csfixed [sol@hiqdev.com]

## [0.4.1] - 2016-05-28

- Added php-cs-fixer v2 support
    - [7b168e1] 2016-05-28 csfixed [sol@hiqdev.com]
    - [c803ae9] 2016-05-28 removed getPhpCsFixer in favour of getFixer [sol@hiqdev.com]
    - [15fcc4c] 2016-05-28 added casedLevel [sol@hiqdev.com]
    - [d9f81e1] 2016-05-28 added php-cs-fixer v2 support [sol@hiqdev.com]

## [0.4.0] - 2016-05-21

- Changed: redone to `composer-config-plugin`
    - [4390815] 2016-05-21 fixed typo [sol@hiqdev.com]
    - [cf89b25] 2016-05-21 redoing to composer-config-plugin [sol@hiqdev.com]
    - [ecbd88c] 2016-05-21 redoing to composer-config-plugin [sol@hiqdev.com]

## [0.3.4] - 2016-04-15

- Fixed `hiqdev/composer-extension-plugin` version constraint
    - [7551fa4] 2016-04-15 fixed `hiqdev/composer-extension-plugin` version constraint [sol@hiqdev.com]

## [0.3.3] - 2016-04-13

- Fixed build with asset-plugin
    - [3d4fe01] 2016-04-13 fixed build with asset-plugin [sol@hiqdev.com]
- Changed to `hidev-config` <- `extension-config`
    - [313e383] 2016-04-13 redone to `hidev-config` <- `extension-config` [sol@hiqdev.com]

## [0.3.2] - 2016-03-30

- Changed `extension-config` <- `yii2-extraconfig`
    - [7f66703] 2016-03-30 rehideved [sol@hiqdev.com]
    - [5436fe1] 2016-03-30 redoing to `extension-config` <- `yii2-extraconfig` [sol@hiqdev.com]

## [0.3.1] - 2016-01-19

- Changed `php-cs-fixer` goal to not stop, added `php-cs-fixer/stop-fix`
    - [eb89196] 2016-01-19 changed `php-cs-fixer` to not stop, added `php-cs-fixer/stop-fix` [sol@hiqdev.com]

## [0.3.0] - 2016-01-15

- Fixed tests
    - [aba4a63] 2016-01-15 fixed tests [sol@hiqdev.com]
- Added php-cs-fixer download link
    - [f69fa8e] 2016-01-15 + php-cs-fixer download link [sol@hiqdev.com]
- Changed goals -> controllers
    - [f64edba] 2016-01-13 renamed goals -> controllers [sol@hiqdev.com]
    - [1008aef] 2016-01-13 renamed hidev-travis <- hidev-travis-ci [sol@hiqdev.com]
    - [e62bbe7] 2016-01-13 renamed goals -> controllers [sol@hiqdev.com]
- Changed PluginManager -> yii2-extraconfig plugin
    - [543a4bd] 2016-01-06 fixed typo [sol@hiqdev.com]
    - [ea74153] 2016-01-06 changed config structure [sol@hiqdev.com]
    - [402fe42] 2016-01-06 redoing with yii2-extraconfig [sol@hiqdev.com]

## [0.2.0] - 2015-12-23

- Fixed build
    - [3325661] 2015-12-23 + Travis `after_script` to upload coverage to Scrutinizer [sol@hiqdev.com]
    - [c824e96] 2015-12-23 fixed build [sol@hiqdev.com]

## [0.1.1] - 2015-11-24

- Added tests and Travis CI
    - [ca81fed] 2015-11-24 php-cs-fixed [sol@hiqdev.com]
    - [4d0f3c1] 2015-11-23 added exit code propagation and used smart `passthru` [sol@hiqdev.com]
    - [9ef53f5] 2015-11-21 doing travis [sol@hiqdev.com]
    - [3fc17b7] 2015-11-21 doing travis [sol@hiqdev.com]
    - [647b1ea] 2015-11-21 + install requires [sol@hiqdev.com]

## [0.1.0] - 2015-11-10

- Added php-cs-fixer caching and VCS ignoring for `.php_cs.cache`
    - [f7f5bfd] 2015-11-09 php-cs-fixed [sol@hiqdev.com]
    - [2170f4f] 2015-11-09 enabled caching, added vcsignoring for `.php_cs.cache` [sol@hiqdev.com]

## [0.0.3] - 2015-09-08

- Fixed requires at .hidev/config.yml
    - [b63f1ec] 2015-09-08 fixed requires at hidev config [sol@hiqdev.com]

## [0.0.2] - 2015-07-11

- Changed configs: redone parent to plugins
    - [8a5ed3b] 2015-07-11 simplified .hidev/config require to hidev-config-php only [sol@hiqdev.com]
    - [d6a60e5] 2015-07-11 improved CHANGELOG [sol@hiqdev.com]
    - [a4ba053] 2015-07-11 redoing parent to plugins [sol@hiqdev.com]
    - [454305a] 2015-07-10 - require & require-dev [sol@hiqdev.com]
    - [0d820a3] 2015-07-09 moved to src [sol@hiqdev.com]
    - [6fb6f4b] 2015-07-05 * composer.json: - require [sol@hiqdev.com]
    - [dcefef9] 2015-06-26 actions renamed [sol@hiqdev.com]

## [0.0.1] - 2015-06-19

- Added first version of php-cs-fixer fix
    - [684156f] 2015-06-19 used passthru for php-cs-fixer fix [sol@hiqdev.com]
    - [374a3a4] 2015-06-19 php-cs-fixed [sol@hiqdev.com]
    - [ed27006] 2015-06-19 + php-cs-fixer actionFix [sol@hiqdev.com]
- Added first version of `.php_cs` generation
    - [5227593] 2015-06-19 + actual goals and views [sol@hiqdev.com]
- Inited
    - [c5b7377] 2015-06-07 hideved [sol@hiqdev.com]
    - [89faed3] 2015-06-07 inited [sol@hiqdev.com]

## [Development started] - 2015-06-07

[7b168e1]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/7b168e1
[c803ae9]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/c803ae9
[15fcc4c]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/15fcc4c
[d9f81e1]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/d9f81e1
[4390815]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/4390815
[cf89b25]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/cf89b25
[ecbd88c]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/ecbd88c
[7551fa4]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/7551fa4
[3d4fe01]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/3d4fe01
[313e383]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/313e383
[7f66703]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/7f66703
[5436fe1]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/5436fe1
[eb89196]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/eb89196
[aba4a63]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/aba4a63
[f69fa8e]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/f69fa8e
[f64edba]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/f64edba
[1008aef]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/1008aef
[e62bbe7]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/e62bbe7
[543a4bd]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/543a4bd
[ea74153]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/ea74153
[402fe42]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/402fe42
[3325661]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/3325661
[c824e96]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/c824e96
[ca81fed]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/ca81fed
[4d0f3c1]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/4d0f3c1
[9ef53f5]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/9ef53f5
[3fc17b7]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/3fc17b7
[647b1ea]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/647b1ea
[f7f5bfd]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/f7f5bfd
[2170f4f]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/2170f4f
[b63f1ec]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/b63f1ec
[8a5ed3b]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/8a5ed3b
[d6a60e5]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/d6a60e5
[a4ba053]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/a4ba053
[454305a]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/454305a
[0d820a3]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/0d820a3
[6fb6f4b]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/6fb6f4b
[dcefef9]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/dcefef9
[684156f]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/684156f
[374a3a4]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/374a3a4
[ed27006]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/ed27006
[5227593]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/5227593
[c5b7377]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/c5b7377
[89faed3]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/89faed3
[5db9297]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/5db9297
[397a0e5]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/397a0e5
