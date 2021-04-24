# PHP

## 空值判斷
| Expression      | gettype()  | empty()  | is_null() | isset()  | boolean : if($x) |
| --------        | --------   | -------- | --------  | -------- | -------- |
| $x = "";        | string     | TRUE     | FALSE     | TRUE     | FALSE
| $x = null;      | null       | TRUE     | TRUE      | FALSE    | FALSE
| var $x;         | null       | TRUE     | TRUE      | FALSE    | FALSE
| $x is undefined | null       | TRUE     | TRUE      | FALSE    | FALSE
| $x = array();   | array      | TRUE     | FALSE     | TRUE     | FALSE
| $x = false;     | boolean    | TRUE     | FALSE     | TRUE     | FALSE
| $x = true;      | boolean    | FALSE    | FALSE     | TRUE     | TRUE
| $x = 1;         | int        | FALSE    | FALSE     | TRUE     | TRUE
| $x = 42;        | int        | FALSE    | FALSE     | TRUE     | TRUE
| $x = 0;         | int        | TRUE     | FALSE     | TRUE     | FALSE
| $x = -1;        | int        | FALSE    | FALSE     | TRUE     | TRUE
| $x = "1";       | string     | FALSE    | FALSE     | TRUE     | TRUE
| $x = "0";       | string     | TRUE     | FALSE     | TRUE     | FALSE
| $x = "-1";      | string     | FALSE    | FALSE     | TRUE     | TRUE
| $x = "php";     | string     | FALSE    | FALSE     | TRUE     | TRUE
| $x = "true";    | string     | FALSE    | FALSE     | TRUE     | TRUE
| $x = "false";   | string     | FALSE    | FALSE     | TRUE     | TRUE