<?php

namespace App\Entity;

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class ArticleTest extends TestCase
{

    protected array $data;

    protected int $number;

    protected function setUp(): void
    {
        $this->data =
            [
                [
                    "title" => "Titre 1",
                    "content" => "Content 1"
                ],
                [
                    "title" => "Titre 2",
                    "content" => "Content 2"
                ],
                [
                    "title" => "Titre 3",
                    "content" => "Content 3"
                ],
                [
                    "title" => "Titre 4",
                    "content" => "Content 4"
                ],
                [
                    "title" => "Titre 5",
                    "content" => "Content 5"
                ],
                [
                    "title" => "Titre 6",
                    "content" => "Content 6"
                ],
                [
                    "title" => "Titre 7",
                    "content" => "Content 7"
                ]
            ];
    }

    public function testGetFourLastArticles()
    {
        $mockRepo = $this->createMock(Article::class);

        $mockProductsArray = [
            [
                "title" => "Titre 1",
                "content" => "Content 1"
            ],
            [
                "title" => "Titre 2",
                "content" => "Content 2"
            ],
            [
                "title" => "Titre 3",
                "content" => "Content 3"
            ],
            [
                "title" => "Titre 4",
                "content" => "Content 4"
            ],
            [
                "title" => "Titre 5",
                "content" => "Content 5"
            ],
            [
                "title" => "Titre 6",
                "content" => "Content 6"
            ],
            [
                "title" => "Titre 7",
                "content" => "Content 7"
            ]
        ];

        $mockRepo->method('getFourLastArticles')->willReturn($mockProductsArray);

        $products = $mockRepo->getFourLastArticles();

        $this->assertEquals(4, count($products));



//        $article = new Article();
//        $listArticles = $article->getFourLastArticles();
//        $this->assertSame(7, $this->count($listArticles));
    }
//
//    public function testCreateArticle()
//    {
//
//    }
//
//    public function testGetNumberArticles()
//    {
//
//    }
//
//    public function testGetOneArticle()
//    {
//
//    }
//
//    public function testGetAllArticles()
//    {
//
//    }
//
//    public function testUpdateArticle()
//    {
//
//    }
//
//    public function testDeleteArticle()
//    {
//
//    }
}
