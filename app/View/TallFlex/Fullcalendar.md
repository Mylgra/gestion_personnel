```php
        $events = [
            [
                'title' => 'All Day Event',
                'start' => now()->toIso8601String(),
                'end' => now()->addHour(3)->toIso8601String(),
            ],
            [
                'title' => 'Long Event',
                'start' => now()->addDay(1)->toIso8601String(),
                'end' => now()->addDay(1)->addHour(4)->toIso8601String(),
            ]
        ];

        foreach ($events as $event) {
            $this->events[] = [
                'title' => $event['title'],
                'start' => $event['start'],
                'end' => $event['end'],
            ];
        }
        FullCalendar::make()
            ->type('dayGridMonth')
            ->selectable()
            ->editable()
            ->height(650)
            ->events($this->events);
```

## Methods

The `FullCalendar` class has the following methods:
> Type

```php
    FullCalendar::make()
        ->type('dayGridMonth');
```

The property `type` in the `FullCalendar` class is used to define the type of the calendar view.
It can be set to different values such as `dayGridMonth`, `timeGridWeek`, `timeGridDay`, etc. to represent different
views of the calendar.
For example, 'dayGridMonth' will display the calendar in a monthly view with days in a grid format.
This property can be set using the `type()` method and retrieved using the `getType()` method.

> Selectable

```php
    FullCalendar::make()
        ->selectable();
```

The property `selectable` in the `FullCalendar` class is used to define whether the calendar is selectable or not.
It can be set to `true` or `false` to enable or disable the selection of dates on the calendar.
This property can be set using the `selectable()` method and retrieved using the `getSelectable()` method.

> Editable

```php
    FullCalendar::make()
        ->editable();
```

The property `editable` in the `FullCalendar` class is used to define whether the calendar is editable or not.
It can be set to `true` or `false` to enable or disable the editing of events on the calendar.
This property can be set using the `editable()` method and retrieved using the `getEditable()` method.

> Height

```php
    FullCalendar::make()
        ->height(650);
```

The property `height` in the `FullCalendar` class is used to define the height of the calendar.
It can be set to a numeric value to define the height of the calendar in pixels.
This property can be set using the `height()` method and retrieved using the `getHeight()` method.

> Events

```php
    FullCalendar::make()
        ->events($this->events);
```

The property `events` in the `FullCalendar` class is used to define the events to be displayed on the calendar.


