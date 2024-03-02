The `Forms` class provides several methods that can be used to manipulate and manage forms. Here are some examples:

```php
use App\View\TallFlex\Forms;
Forns::make()
    ->schema([
    
    ]);
```

1. `make(string $name = null): static` - This static method is used to create a new instance of the `Forms` class. It
   accepts an optional string parameter `$name` which represents the name of the form.

2. `schema(array $schema): static` - This method is used to set the schema of the form. It accepts an array `$schema`
   which represents the schema of the form.


6. `action(string $route): static` - This method is used to set the route of the form. It accepts a string `$route`
   which represents the route of the form.

```php
use App\View\TallFlex\Forms;
Forns::make()
    ->schema([
    
    ])
    ->actions(route('register'));
```

8. `hasColumn(): bool` - This method is used to check if the form has a column. It returns a boolean value.

9. `hasSection(): bool` - This method is used to check if the form has a section. It returns a boolean value.

10. `column(int $column): static` - This method is used to set the column of the form. It accepts an integer `$column`
    which represents the column of the form.

11. `getColumn(): int|Closure|null` - This method is used to get the column of the form. It returns an integer or
    a `Closure` or `null` representing the column of the form.
