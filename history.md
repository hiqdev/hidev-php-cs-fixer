# hiqdev/hidev-php-cs-fixer

## [0.6.1] - 2017-05-08

- Renamed `File` <- ConfigFile
    - [5ba0999] 2017-05-08 csfixed [@hiqsol]
    - [7406cea] 2017-05-08 renamed `File` <- ConfigFile [@hiqsol]

## [0.6.0] - 2017-05-03

- Redone to new hidev
    - [bc9c94c] 2017-05-03 csfixed [@hiqsol]
    - [3c57020] 2017-05-03 fixed tests [@hiqsol]
    - [48e2803] 2017-05-01 moved ConfigFile to `hidev\base` [@hiqsol]
    - [26ef177] 2017-04-30 renamed `hidev.yml` <- .hidev/config.yml [@hiqsol]
    - [507fd8b] 2017-04-30 redoing to new hidev [@hiqsol]

## [0.4.5] - 2017-03-29

- Fixed renaming bug
    - [cc11540] 2017-03-27 fixed renaming this -> handler [@SilverFire]

## [0.4.4] - 2017-03-27

- Fixed views to follow hidev API changes
    - [fec8755] 2017-03-27 Fixed views to follow hidev API changes [@SilverFire]

## [0.4.3] - 2017-01-05

- Fixed command to run `php-cs-fixer fix` without `.`
    - [475ffaf] 2017-01-05 excluded `src/views` from phpcsfixing [@hiqsol]
    - [03d6cfb] 2017-01-05 fixed copyright year [@hiqsol]
    - [fe63c3d] 2016-12-06 fixed command to run `php-cs-fixer fix` no . path given [@hiqsol]

## [0.4.2] - 2016-12-06

- Removed (broken) support for version 1
    - [03a79c9] 2016-12-06 csfixed [@hiqsol]
    - [9beb819] 2016-12-06 redone bumping to `chkipper` [@hiqsol]
- Fixed `.php_cs` config template for version 2
    - [5db9297] 2016-12-03 fixed `.php_cs` config template for version 2 [@hiqsol]
    - [397a0e5] 2016-05-28 csfixed [@hiqsol]

## [0.4.1] - 2016-05-28

- Added php-cs-fixer v2 support
    - [7b168e1] 2016-05-28 csfixed [@hiqsol]
    - [c803ae9] 2016-05-28 removed getPhpCsFixer in favour of getFixer [@hiqsol]
    - [15fcc4c] 2016-05-28 added casedLevel [@hiqsol]
    - [d9f81e1] 2016-05-28 added php-cs-fixer v2 support [@hiqsol]

## [0.4.0] - 2016-05-21

- Changed: redone to `composer-config-plugin`
    - [4390815] 2016-05-21 fixed typo [@hiqsol]
    - [cf89b25] 2016-05-21 redoing to composer-config-plugin [@hiqsol]
    - [ecbd88c] 2016-05-21 redoing to composer-config-plugin [@hiqsol]

## [0.3.4] - 2016-04-15

- Fixed `hiqdev/composer-extension-plugin` version constraint
    - [7551fa4] 2016-04-15 fixed `hiqdev/composer-extension-plugin` version constraint [@hiqsol]

## [0.3.3] - 2016-04-13

- Fixed build with asset-plugin
    - [3d4fe01] 2016-04-13 fixed build with asset-plugin [@hiqsol]
- Changed to `hidev-config` <- `extension-config`
    - [313e383] 2016-04-13 redone to `hidev-config` <- `extension-config` [@hiqsol]

## [0.3.2] - 2016-03-30

- Changed `extension-config` <- `yii2-extraconfig`
    - [7f66703] 2016-03-30 rehideved [@hiqsol]
    - [5436fe1] 2016-03-30 redoing to `extension-config` <- `yii2-extraconfig` [@hiqsol]

## [0.3.1] - 2016-01-19

- Changed `php-cs-fixer` goal to not stop, added `php-cs-fixer/stop-fix`
    - [eb89196] 2016-01-19 changed `php-cs-fixer` to not stop, added `php-cs-fixer/stop-fix` [@hiqsol]

## [0.3.0] - 2016-01-15

- Fixed tests
    - [aba4a63] 2016-01-15 fixed tests [@hiqsol]
- Added php-cs-fixer download link
    - [f69fa8e] 2016-01-15 + php-cs-fixer download link [@hiqsol]
- Changed goals -> controllers
    - [f64edba] 2016-01-13 renamed goals -> controllers [@hiqsol]
    - [1008aef] 2016-01-13 renamed hidev-travis <- hidev-travis-ci [@hiqsol]
    - [e62bbe7] 2016-01-13 renamed goals -> controllers [@hiqsol]
- Changed PluginManager -> yii2-extraconfig plugin
    - [543a4bd] 2016-01-06 fixed typo [@hiqsol]
    - [ea74153] 2016-01-06 changed config structure [@hiqsol]
    - [402fe42] 2016-01-06 redoing with yii2-extraconfig [@hiqsol]

## [0.2.0] - 2015-12-23

- Fixed build
    - [3325661] 2015-12-23 + Travis `after_script` to upload coverage to Scrutinizer [@hiqsol]
    - [c824e96] 2015-12-23 fixed build [@hiqsol]

## [0.1.1] - 2015-11-24

- Added tests and Travis CI
    - [ca81fed] 2015-11-24 php-cs-fixed [@hiqsol]
    - [4d0f3c1] 2015-11-23 added exit code propagation and used smart `passthru` [@hiqsol]
    - [9ef53f5] 2015-11-21 doing travis [@hiqsol]
    - [3fc17b7] 2015-11-21 doing travis [@hiqsol]
    - [647b1ea] 2015-11-21 + install requires [@hiqsol]

## [0.1.0] - 2015-11-10

- Added php-cs-fixer caching and VCS ignoring for `.php_cs.cache`
    - [f7f5bfd] 2015-11-09 php-cs-fixed [@hiqsol]
    - [2170f4f] 2015-11-09 enabled caching, added vcsignoring for `.php_cs.cache` [@hiqsol]

## [0.0.3] - 2015-09-08

- Fixed requires at .hidev/config.yml
    - [b63f1ec] 2015-09-08 fixed requires at hidev config [@hiqsol]

## [0.0.2] - 2015-07-11

- Changed configs: redone parent to plugins
    - [8a5ed3b] 2015-07-11 simplified .hidev/config require to hidev-config-php only [@hiqsol]
    - [d6a60e5] 2015-07-11 improved CHANGELOG [@hiqsol]
    - [a4ba053] 2015-07-11 redoing parent to plugins [@hiqsol]
    - [454305a] 2015-07-10 - require & require-dev [@hiqsol]
    - [0d820a3] 2015-07-09 moved to src [@hiqsol]
    - [6fb6f4b] 2015-07-05 * composer.json: - require [@hiqsol]
    - [dcefef9] 2015-06-26 actions renamed [@hiqsol]

## [0.0.1] - 2015-06-19

- Added first version of php-cs-fixer fix
    - [684156f] 2015-06-19 used passthru for php-cs-fixer fix [@hiqsol]
    - [374a3a4] 2015-06-19 php-cs-fixed [@hiqsol]
    - [ed27006] 2015-06-19 + php-cs-fixer actionFix [@hiqsol]
- Added first version of `.php_cs` generation
    - [5227593] 2015-06-19 + actual goals and views [@hiqsol]
- Inited
    - [c5b7377] 2015-06-07 hideved [@hiqsol]
    - [89faed3] 2015-06-07 inited [@hiqsol]

## [Development started] - 2015-06-07

[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
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
[03a79c9]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/03a79c9
[9beb819]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/9beb819
[475ffaf]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/475ffaf
[03d6cfb]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/03d6cfb
[fe63c3d]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/fe63c3d
[Under development]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.6.0...HEAD
[0.4.2]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.4.1...0.4.2
[0.4.1]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.4.0...0.4.1
[0.4.0]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.3.4...0.4.0
[0.3.4]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.3.3...0.3.4
[0.3.3]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.3.2...0.3.3
[0.3.2]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.3.1...0.3.2
[0.3.1]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.3.0...0.3.1
[0.3.0]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.2.0...0.3.0
[0.2.0]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.1.1...0.2.0
[0.1.1]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.1.0...0.1.1
[0.1.0]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.0.3...0.1.0
[0.0.3]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.0.2...0.0.3
[0.0.2]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.0.1...0.0.2
[0.0.1]: https://github.com/hiqdev/hidev-php-cs-fixer/releases/tag/0.0.1
[0.4.3]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.4.2...0.4.3
[fec8755]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/fec8755
[0.4.4]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.4.3...0.4.4
[cc11540]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/cc11540
[0.4.5]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.4.4...0.4.5
[bc9c94c]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/bc9c94c
[3c57020]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/3c57020
[48e2803]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/48e2803
[26ef177]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/26ef177
[507fd8b]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/507fd8b
[0.6.0]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.4.5...0.6.0
[5ba0999]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/5ba0999
[7406cea]: https://github.com/hiqdev/hidev-php-cs-fixer/commit/7406cea
[0.6.1]: https://github.com/hiqdev/hidev-php-cs-fixer/compare/0.6.0...0.6.1
