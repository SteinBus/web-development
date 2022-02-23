PROGRAM SarahRevere(INPUT, OUTPUT);
USES Dos;  
VAR
  Name, Query: STRING;
BEGIN {PaulRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  Name := Copy(Query, 6, Length(Query));
  IF Name = ''
  THEN
    WRITELN('Hello, Anonymous')
  ELSE
    WRITELN('Hello, ', Name);    
END. {PaulRevere}

