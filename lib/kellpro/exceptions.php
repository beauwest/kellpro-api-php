<?php

class KellPro_Error extends Exception
{
}

class KellPro_NotFoundError extends KellPro_Error
{
}

class KellPro_MethodNotAllowedError extends KellPro_Error
{
}

class KellPro_MissingParameters extends KellPro_Error
{
}

class KellPro_UnauthorizedError extends KellPro_Error
{
}

class KellPro_ServerError extends KellPro_Error
{
}