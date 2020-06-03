<?php
namespace MyVendor\Weekday\Resource\Page;

//use BEAR\Resource\Annotation\Embed;
use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Index extends ResourceObject
{

//@Embedでリソースを埋め込むかわりにuse ResourceInject;でresourceリソースクライアントを
//インジェクトしてそのクライアントでappリソースをセットすることもできる

   // /**
   //   * @Embed(rel="weekday", src="app://self/weekday{?year,month,day}")
   //   */
   //  public function onGet(int $year, int $month, int $day) : ResourceObject
   //  {
   //      $this->body += [
   //          'year' => $year,
   //          'month' => $month,
   //          'day' => $day
   //      ];
   //
   //      return $this;
   //  }

use ResourceInject;

public function onGet(int $year, int $month, int $day) : ResourceObject
{
  $params = get_defined_vars(); // ['year' => $year, 'month' => $month, 'day' => $day]
  $this->body = $params + [
      'weekday' => $this->resource->get('app://self/weekday', $params)
  ];

  return $this;
}
}
