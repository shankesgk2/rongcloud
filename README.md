# Laravel RongCloud Server API

## 运行环境

- php >= 7.2
- composer
- laravel || lumen >= 5.1

## 安装

```Shell
$ composer require shankesgk2/rongcloud
```

### 添加 service provider（optional. if laravel < 5.5 || lumen）

```PHP
// laravel < 5.5
Shankesgk2\RongCloud\RongCloudServiceProvider::class,

// lumen
$app->register(Shankesgk2\RongCloud\RongCloudServiceProvider::class);
```

### 添加 alias（optional. if laravel < 5.5）

```PHP
'RongCloud' => Shankesgk2\RongCloud\RongCloudServiceProvider::class,
```

### 配置文件

```Shell
$ php artisan vendor:publish --provider="Shankesgk2\RongCloud\RongCloudServiceProvider"
```

**lumen 用户请手动复制**

随后，请在 `config` 文件夹中完善配置信息。

`.env` 文件里面配置

```PHP
RC_APP_KEY=
RC_APP_SECRET=
RC_API_URL=
RC_SMS_URL=
```

## 使用方法

```PHP
use Shankesgk2\RongCloud\Facades\RongCloud;

$user = [
    'id' => 'Lrkqw5cNGD',
    'name' => 'test1',
    'portrait' => 'http://7xogjk.com1.z0.glb.clouddn.com/IuDkFprSQ1493563384017406982'
];

$register = RongCloud::getUser()->register($user);

```

具体使用说明请参考融云官方文档 [https://www.rongcloud.cn/docs/server_sdk_api/](https://www.rongcloud.cn/docs/server_sdk_api/)

## License

MIT
