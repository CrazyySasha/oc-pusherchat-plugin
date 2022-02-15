<?php namespace Crazy\PusherChat;

use Backend;
use System\Classes\PluginBase;

/**
 * PusherChat Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'PusherChat',
            'description' => 'No description provided yet...',
            'author'      => 'Crazy',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Crazy\PusherChat\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
       // return []; // Remove this line to activate

        return [
            'crazy.pusherchat.some_permission' => [
                'tab' => 'PusherChat',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {    

        return [
            'pusherchat' => [
                'label'       => 'PusherChat',
                'url'         => Backend::url('crazy/pusherchat/Chat'),
                'icon'        => 'icon-comments-o',
                'permissions' => ['crazy.pusherchat.*'],
                'order'       => 500,
                'sideMenu' => [

                    'chat' => [
                        'label' => 'Чаты',
                        'icon' => 'icon-comments-o',
                        'url' => Backend::url('crazy/pusherchat/Chat'),
                        'permissions' => ['crazy.pusherchat.access_chat'],
                    ],
                    'message' => [
                        'label' => 'Сообщения',
                        'icon' => 'icon-comments-o',
                        'url' => Backend::url('crazy/pusherchat/Message'),
                        'permissions' => ['crazy.pusherchat.access_message'],
                    ],
                ],
            ],
        ];
    }
}
