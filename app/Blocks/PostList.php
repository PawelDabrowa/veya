<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SimplePostList extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Simple Post List';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Customizable generic list of posts.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block post types.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'posts' => $this->posts(),
        ];
    }

     /**
     * The widget field group.
     *
     * @return array
     */
    public function fields()
    {
        $postList = new FieldsBuilder('simple_post_list');

        $postList
            ->addSelect('filter')
                ->addChoices(
                    ['none' => 'None'],
                    ['post_type' => 'Post Type'],
                    ['category' => 'Category']
                )

            ->addRange('count', ['min' => 1, 'max' => 250])
                ->setLabel('Number of Posts')
                ->setDefaultValue('5')

            ->addSelect('order')
                ->setLabel('Post Order')
                ->addChoices(
                    ['date' => 'Published'],
                    ['modified' => 'Modified'],
                    ['title' => 'Title'],
                    ['rand' => 'Random']
                )

            ->addButtonGroup('sort')
                ->setLabel('Sorting')
                ->addChoices(['asc' => 'Ascending', 'desc' => 'Descending'])
                ->setDefaultValue('desc')

            ->addSelect('post_type')
                ->conditional('filter', '==', 'post_type')
                ->addChoices(
                    ['post' => 'Post'],
                    ['page' => 'Page'],
                )

            ->addTaxonomy('category', ['taxonomy' => 'category'])
                ->conditional('filter', '==', 'category');

        return $postList->build();
    }

    /**
     * Return the queried posts.
     *
     * @return array
     */
    public function posts()
    {
        return collect(
            get_posts([
                'post_type' => get_field('post_type', $this->widget->id) ?? 'post',
                'posts_per_page' => get_field('count', $this->widget->id) == 0 ?
                    -1 : get_field('count', $this->widget->id),
                'orderby' => get_field('order', $this->widget->id) ?? 'date',
                'order' => get_field('sort', $this->widget->id) ?? 'desc',
                'category__and' => get_field('category', $this->widget->id) ?? null,
            ])
        )->map(function ($item) {
            return (object) [
                'title' => get_the_title($item),
                'url' => get_the_permalink($item),
            ];
        })->filter();
    }
}