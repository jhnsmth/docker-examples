#!/bin/sh

# несколько примеров работы с многострочным текстом
# обрати внимание на отличие echo с кавычками и без


# Example 1
# END это произвольное слово, обозначающее начало и конец блока текста
# оно должно быть перед первой строкой текста и после последней 
TEXT=$(cat <<- END
  This is line one.
   This is line two.
    This is line three.
END
) # скобка должна быть на новой строке

echo "---- Example 1.1 ----"
echo $TEXT
echo "---- Example 1.2 ----"
echo "$TEXT"

# Example 2
# В отличии от предыдущего, есть символы новой строки в начале и в конце
TEXT="
  This is line one.
   This is line two.
    This is line three.
"

echo "---- Example 2.1 ----"
echo $TEXT
echo "---- Example 2.2 ----"
echo "$TEXT"

# Example 3
read -r -d '' TEXT <<-EOM
    This is line 1.
    This is line 2.
    Line 3.
EOM

echo "---- Example 3.1 ----"
echo $TEXT
echo "---- Example 3.2 ----"
echo "$TEXT"
echo "---- END ----"

# just a cute cat ;)
cat <<'END_CAT'
 /\_/\
( o.o )
 > ^ <
END_CAT
