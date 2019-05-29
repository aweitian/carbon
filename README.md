## 安装
> composer require aweitian/carbon

## 示例
```
$da = new Carbon('2018-10-9');
$da->lastDayOfMonth();//切换到月底
$da->firstDayOfMonth();//切换到月初
$da->format("Y-m-d"); //output

```
## 常用API
- time() Gets the Unix timestamp
- Carbon::now() 返回当前时间的Carbon对象
- 