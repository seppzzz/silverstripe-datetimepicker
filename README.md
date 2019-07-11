<h1>intwebg/silverstripe-datetimepicker</h1>
<p>Add a calendar date and time picker to DatetimeField.</p>
<p>Add a calendar date picker to DateField.</p>
<p>Add a time picker to TimeField.</p>

<h2>Installation</h2>
<p><code>composer require intwebg/silverstripe-datetimepicker</code></p>
<p>Silverstripe 4.4.x</p>

<h2>Basic usage to show the picker in the CMS</h2>
<pre>
DateField::create('Date')->setHTML5(false)->setDateFormat('yyyy-MM-dd')
TimeField::create('Time')->setHTML5(false)->setTimeFormat('HH:mm')
DatetimeField::create('DateTime')->setHTML5(false)->setDatetimeFormat('yyyy-MM-dd HH:mm:ss')
</pre>

<h2>ToDos</h2>
<ul>
<li>Release more customizable option</li>
</ul>
<p>Datetime picker jQuery library came from https://github.com/xdan/datetimepicker
