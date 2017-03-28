<?php

use Illuminate\Database\Seeder;

class ProductImages extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		DB::table('product_images')->insert([
				'id_product' => '1',
				'mime' => 'image/png',
				'image' => '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',
			]);
		DB::table('product_images')->insert([
				'id_product' => '1',
				'mime' => 'image/png',
				'image' => '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',
			]);
		DB::table('product_images')->insert([
				'id_product' => '2',
				'mime' => 'image/png',
				'image' => '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',
			]);
		DB::table('product_images')->insert([
				'id_product' => '2',
				'mime' => 'image/png',
				'image' => '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',
			]);
		DB::table('product_images')->insert([
				'id_product' => '3',
				'mime' => 'image/png',
				'image' => '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',
			]);
		DB::table('product_images')->insert([
				'id_product' => '4',
				'mime' => 'image/png',
				'image' => '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',
			]);

		DB::table('product_images')->insert([
				'id_product' => '5',
				'mime' => 'image/jpeg',
				'image' => '/9j/4AAQSkZJRgABAQAAAQABAAD//gA7Q1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2OTApLCBxdWFsaXR5ID0gOTAK/9sAQwADAgIDAgIDAwMDBAMDBAUIBQUEBAUKBwcGCAwKDAwLCgsLDQ4SEA0OEQ4LCxAWEBETFBUVFQwPFxgWFBgSFBUU/9sAQwEDBAQFBAUJBQUJFA0LDRQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU/8AAEQgAMgAhAwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEBAQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEHYXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8A+/tS8TeJZ7fVpNIW3eGyvJ4hJNF8xRSoyfmAyHEy46lQjY5G7e0FfE8l2smtPp9vb7AfJtNxYuR0JI4HPY9R3Brem02ziJm8lVIbzCBwpbOdxXoTnnJ5rNsNbg1W6uLcOrSQMCCD94ev4Hg/SnKfKrG/tEqfIor1tqbSp7U8Diqtpcu9zLE44GGRvVT/AIHP6VeVc1UXdXOUj2+1FTYFFO4zM8QytFpkpQZcjAHvXhPjQ3nwo1uNNIZY4mf7QPM53qTlh/MHvXtHjiXyPDN7N5ixeWu7exwB26/jXz38afiDpni/USmnXNvfW1r+78+1dZFXBBOWUkDOR+GKxmjamm/Q9k+F3jObxtHd3LxrbpBtj8sNuJJ5znA446frXoAr5v8Agh4+0nwqtxFquo2+n2s6M/mXEgXc4YbVGepwW4Hp7V65afGXwTdzpEniWwV3IVfMk8sEnoMsAKlVacVyykk/VHTHA4qqnUpUpSj3UZNfekzudtFM8yitdThseF/toyZ/Za+JHPTS2P8A4+tfmr+yh4r1jTvAXju3guDJpKW8V8beVsKtyA20ryfvKnzHHRF64Ffpv+1L4T1Xx7+z9448PaLEk2qahp7Q26SOEDMWU4JPA6V8Xfsvfs36p8DrWS88VaPd61fXZxLYwx/a7IbVkUZVeWyHH3u46Yzm5v3bG0dl8/0MrxZf+NLrRdH1HwzHezagkcsd1Hp1uZmVHCcbQCcfKecVsePPE3jPxLaWOl+ENJ8SvqE7Pb3DJb3MokjkXaykSW6BcnuD0/En6d8GWms2eoi70DweuiyMmwSz7FAU9fkyWFfQcMz+Wu7G/Azj1rhhh4+zxFOSv7VJXe8bdY+p9rheKKmEeXtUU/qkpu19KnM20qitqot6W/A84/4QvxH7/wDgQP8AGivS/Nb2orT6vDuzwv7ZxH8sfuM7WhnTbjP93+tcdaKAJcADgUUV1dDxEbHh/wD4+T/umuioopoXUbk+poooqSj/2Q==',
				'created_at' => '2017-03-19 07:45:22',
				'updated_at' => '2017-03-19 07:45:22'
			]);

		DB::table('product_images')->insert([
				'id_product' => '5',
				'mime' => 'image/jpeg',
				'image' => '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',
				'created_at' => '2017-03-19 07:45:22',
				'updated_at' => '2017-03-19 07:45:22'
			]);

	}
}