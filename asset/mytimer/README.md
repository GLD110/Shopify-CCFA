# simpleTimer
依赖jQuery的计时器组件

```javascript
//默认参数
var defaluts = {
	day: 0,				// 日
	dayDom: '',			// 日选择器
	hour: 0,			// 小时
	hourDom: '',		// 小时选择器
	minute: 1,			// 分钟
	minuteDom: '',		// 分钟选择器
	second: 0,			// 秒
	secondDom: '',		// 秒选择器
	millisecond: 0,		// 毫秒
	millisecondDom: '',	// 毫秒选择器
	blank: 1000, 		// 刷新间距
	pause: '',			// 暂停按钮选择器
	pauseFun: '',		// 暂停回调方法
	goonFun: '',		// 继续回调方法
	endFun: '',			// 结束回调方法
	animation: 'none' 	// 无动画效果  有时间再加
};
```

## 结构
```html
<div class="simple-timer">
  <span class="timer-day">00</span>
  <label class="separator">:</label>
  <span class="timer-hour">00</span>
  <label class="separator">:</label>
  <span class="timer-minute">00</span>
  <label class="separator">:</label>
  <span class="timer-second">00</span>
  <span class="timer-millisecond">0</span>
</div>
<button id="pause_btn">暂停</button>
```

class
timer-day、timer-hour、timer-minute、timer-second、timer-millisecond 是可选的。其他都是不必要的。<br/>（[20161213/modify]）上面的类都不是必须的。可以自由输入自己的节点。
