PROGRAM SarahRevere(INPUT, OUTPUT);
USES Dos;
VAR
  Query: STRING;
BEGIN {PaulRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  IF Query = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF Query = 'lanterns=2'
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('Something is wrong: ', Query)
END. {PaulRevere}

