PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES Dos;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR 
  PosParameter, PosDivider: INTEGER;
  Query, Parameter: STRING;
BEGIN
  Query := GetEnv('QUERY_STRING');
  PosParameter := Pos(Key + '=', Query);
  IF PosParameter = 0
  THEN
    GetQueryStringParameter := ''
  ELSE
    BEGIN
      Parameter := Copy(Query, PosParameter + Length(Key) + 1, Length(Query));
      PosDivider := Pos('&', Parameter);
      IF PosDivider <> 0
      THEN
        Parameter := Copy(Parameter, 1, PosDivider - 1);
      GetQueryStringParameter := Parameter;
    END  
END;

BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}
